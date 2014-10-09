<!DOCTYPE html>
<html>

<head>

    <meta name="description" content="<?php echo lang('ACME Framework is a CodeIgniter powerful PHP pre-application that after installed on your server become an awesome single new application with a lot of features.')?>">
    <meta name="keywords" content="ACME Framework, acme, framework, mvc, php, codeigniter, pre-application, powerful, application, simple">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo APP_NAME ?> • <?php echo lang('A powerful CodeIgniter application framework') ?></title>

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo URL_JS ?>/jquery-1.10.2.js"></script>
    <script src="<?php echo URL_JS ?>/bootstrap.js"></script>
    <script src="<?php echo URL_JS ?>/plugins/bootbox/bootbox.min.js"></script>

    <!-- App Scripts - Include with every page -->
    <script src="<?php echo URL_JS ?>/app-functions.js"></script>

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo URL_CSS ?>/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL_CSS ?>/plugins/font-awesome/css/font-awesome.css" rel="stylesheet">
    
    <!-- App CSS - Include with every page -->
    <link href="<?php echo URL_CSS ?>/bootflat.css" rel="stylesheet">
    <link href="<?php echo URL_CSS ?>/app-styles.css" rel="stylesheet">
    <link href="<?php echo URL_CSS ?>/site.css" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo URL_IMG ?>/favicon.ico">

    <!-- Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-17976714-2', 'auto');
      ga('send', 'pageview');

    </script>

</head>

<body>

<?php echo app_settings_inputs(); ?>
    
    <div class="wrapper">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            
            <div class="navbar-header">
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <!-- brand/logo -->
                <div class="navbar-brand"><a href="<?php echo URL_ROOT ?>"><img src="<?php echo URL_IMG ?>/logo-acme.png" /></a></div>

            </div>
            
            <div class="navbar-collapse collapse">
                
                <ul class="nav navbar-nav">

                    <li class="dropdown">
                        
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-fw fa-globe"></i>
                            
                            <?php 
                            
                            // get language
                            $lang = $this->session->userdata('language');

                            // Write language name
                            switch ($lang) {
                                
                                case 'en_US':
                                default:
                                    echo lang('English');
                                break;
                                
                                case 'pt_BR':
                                    echo lang('Brazilian Portuguese');
                                break;
                            }

                            ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="javascript:void(0)" class="change-language" id="en_US">
                                    <i class="fa fa-fw text-danger <?php echo $lang == 'en_US' ? 'fa-dot-circle-o' : 'fa-circle-o'; ?>"></i>
                                    <?php echo lang('English') ?>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="change-language" id="pt_BR">
                                    <i class="fa fa-fw text-danger <?php echo $lang == 'pt_BR' ? 'fa-dot-circle-o' : 'fa-circle-o'; ?>"></i>
                                    <?php echo lang('Brazilian Portuguese') ?>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li><a href="http://demo.acmeframework.org" target="_blank"><?php echo lang('See a demo')?></a></li>
                                        
                    <li><a href="<?php echo URL_ROOT ?>/docs"><?php echo lang('Docs')?></a></li>
                    
                    <li><a href="<?php echo URL_ROOT ?>/community"><?php echo lang('Community')?></a></li>

                    <li><a href="<?php echo URL_ROOT ?>/oracle"><?php echo lang('Oracle version')?></a></li>

                </ul>                
        
            </div>

        </div>

        <div id="page-wrapper">

            <?php echo $html ?>

            <div class="module-footer">

                <div class="container">

                <div class="row">

                    <div class="col-md-3" style="margin: 0 0 30px">

                        <img src="<?php echo URL_IMG ?>/logo-acme.png" class="img-responsive" style="margin: -10px 0 0 " />

                    </div>

                    <div class="col-md-4 col-md-offset-1" style="margin-bottom: 30px">

                        <h4><?php echo lang('Pages') ?></h4>

                        <p><a href="http://demo.acmeframework.org" target="_blank"><?php echo lang('See a demo') ?></a></p> 

                        <p><a href="<?php echo URL_ROOT ?>/docs"><?php echo lang('Docs') ?></a></p>

                        <p><a href="<?php echo URL_ROOT ?>/docs/older-versions"><?php echo lang('Older versions') ?></a></p>

                        <p><a href="<?php echo URL_ROOT ?>/community"><?php echo lang('Community') ?></a></p>

                        <p><a href="<?php echo URL_ROOT ?>/oracle"><?php echo lang('Oracle version') ?></a></p>
                        
                        <p><a href="http://www.codecomplex.com.br" target="_blank"><?php echo lang('Code Complex') ?></a></p>

                    </div>

                    <div class="col-md-4">

                        <div class="social-buttons text-center">

                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <a href="http://www.twitter.com/acmeframework" target="blank" title="<?php echo lang('Follow on twitter')?>">
                                <i class="fa fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>

                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <a href="http://www.facebook.com/acmeframework" target="blank" title="<?php echo lang('Like on facebook')?>">
                                <i class="fa fa-facebook fa-stack-1x"></i>
                                </a>
                            </span>

                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <a href="http://github.com/code-complex/acmeframework" target="blank" title="<?php echo lang('Fork on github')?>">
                                <i class="fa fa-github fa-stack-1x"></i>
                                </a>
                            </span>

                        </div>

                        <br />

                        <div class="well">
                        <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Facmeframework&amp;width=700&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=80&amp;appId=133367283442799" 
                        scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:100%; width: 100%; background-color:#fff;" allowTransparency="true"></iframe>
                        </div>


                    </div>

                </div>

                </div>

            </div>
        
        </div>
        <!-- /#page-wrapper -->
        
    </div>
    <!-- /#wrapper -->

    <div class="loading-layer"></div>
    <div class="loading-box"><h4><i class="fa fa-fw fa-circle-o-notch fa-spin"></i> <?php echo lang('Loading')?></h4></div>

</body>

<script>

    $.container_html();

    // =================
    // language callback
    // =================
    $('a.change-language').on('click', function () {
        
        $.change_language_custom($(this).attr('id'));
    });

    // ======================
    // custom change language
    // ======================
    $.change_language_custom = function (language) {

        if(language == 'pt_BR') {
            bootbox.alert("<?php echo lang('Sorry but this language is not available yet. You can get even more envolved with the project and help us translating this website. Send an email to the address')?> <a href=\"mailto:questions@codecomplex.com.br?subject=I want to translate ACME Framework website\">questions@codecomplex.com.br</a> asking to translate. <?php echo lang('Thank you!') ?>");
            return;
        }

        $.enable_loading();

        $.ajax({
            url: $('#URL_ROOT').val() + '/change_language/' + language,
            context: document.body,
            dataType : 'json',
            cache: false,
            type: 'POST',
            complete : function (data) {
                
                window.location.reload();

            }
        });
    };

</script>

</html>
