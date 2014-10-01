<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* --------------------------------------------------------------------------------------------------
*
* Controller Site
* 
* Site controller. Manage all ACME FMK site pages.
*
* @since	16/08/2014
*
* --------------------------------------------------------------------------------------------------
*/
class Site extends ACME_Core_Controller {
	
	/**
	* __construct()
	* Class constructor.
	*/
	public function __construct()
	{
		parent::__construct();

		// Set language setting
		if ( $this->session->userdata('language') == '')
			$this->session->set_userdata('language', LANGUAGE);

		// Set url_default setting
		if ( $this->session->userdata('url_default') == '')
			$this->session->set_userdata('url_default', 'http://www.acmeframework.org');
	}
	
	/**
	* index()
	* Index site.
	* @return void
	*/
	public function index()
	{
		$this->template->load_page('site/index');
	}

	/**
	* docs()
	* Docs page, redirect to quick start.
	* @param string version
	* @return void
	*/
	public function docs($version = '')
	{
		$version = strtolower($version);

		$allowed = array('older-versions', 
						 '2.2.11', 
						 '2.2.10', 
						 '2.1.10', 
						 '2.1.9', 
						 '2.1.8', 
						 '2.1.7',
						 '2.1.6-beta', 
						 '2.1.5-beta', 
						 '2.1.4-beta', 
						 '2.1.3-beta', 
						 '2.0.3-beta', 
						 '2.0.2-beta', 
						 '2.0.1-beta', 
						 '1.0.0'
						 );

		if($version == '')
			redirect('docs/' . ACME_VERSION);

		if( ! in_array($version, $allowed))
			show_404_();

		// put current version in args
		$args['version'] = $version;
		$args['allowed'] = $allowed;

		// Load properly page
		$this->template->load_page('site/docs/' . $version . '.php', $args);
	}

	/**
	* community()
	* Community page.
	* @return void
	*/
	public function community()
	{
		$this->template->load_page('site/community');
	}

	/**
	* oracle()
	* Oracle's version page. Buy ACME for oracle.
	* @return void
	*/
	public function oracle()
	{
		$this->template->load_page('site/oracle');
	}
	
	/**
	* not_found()
	* For 404 pages.
	* @return void
	*/
	public function not_found()
	{
		$this->error->show_404();
	}

	/**
	* change_language()
	* Change current language on session.
	* @param string language 	// en_US, pt_BR, es_ES ...
	* @return string json
	*/
	public function change_language($language = '')
	{
		$this->session->set_userdata('language', $language);
		echo json_encode(array('return' => true));
	}

	/**
	* build_translation_file()
	* This is a very useful action. It catch all lang() function calls from
	* every file on entire project and build a language file containing all
	* translatable indexes. 
	*
	* BE CAREFUL: THIS FUNCTION ERASE ALL CONTENT OF LANGUAGE FILES.
	*
	* @return object
	*/
	/*
	public function build_translation_file()
	{
		set_time_limit(0);

		$this->load->helper('file');

		$lang_calls = array();
		$lang_indexes = array();

		// First foreach all project files
		foreach(get_filenames('application', true) as $key => $file) {
			
			// get content of current file
			$content = read_file($file);

			// match any call of lang()
			if(preg_match_all('/lang[ ]*[(][ ]*[\'"][^\'")]*[\'"][ ]*[)]/i', $content, $matches))
			{

				// For every match, put inside array of indexes and indexes per file
				foreach($matches[0] as $key => $match) {

					// Translatable array
					$lang_indexes[] = $match;

					// List every call per file
					$lang_calls[str_replace(getcwd() . '/', '', $file)][] = $match;
				
				}

			}
		}

		// Remove duplicate keys
		$lang_indexes = array_unique($lang_indexes);

		// Order indexes
		natsort($lang_indexes);

		// Content of new file
		$before = '';
		$content = "<?php\n\n// Application language indexes";

		// Now put in the new file the array of translatable indexes
		foreach ($lang_indexes as $key => $match) {

			$match = trim(preg_replace('/lang[ ]?[(][ ]?/i', '', $match), ') ');
			$content .= "\n" . '$lang[' . $match . '] = ' . $match . ';';

		}

		// Now insert on translate file all calls grouped by file, just for reading
		foreach ($lang_calls as $file => $matches) {
			
			if($file != $before)
				$content .= "\n\n// File " . $file;

			foreach ($matches as $key => $match) {

				$match = trim(preg_replace('/lang[ ]?[(][ ]?/i', '', $match), ') ');

				$content .= "\n" . '// -> $lang[' . $match . '] = ' . $match . ';';
			}
		}

		// create files
		$languages = array('pt_BR', 'en_US');

		foreach($languages as $language)
			file_put_contents('application/language/' . $language . '/app_lang.php', $content);
	}
	*/
}
