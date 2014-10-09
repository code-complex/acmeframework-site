<div class="module-header">

    <div class="row">

        <div class="col-sm-12 col-md-12">

            <i class="fa fa-fw fa-thumbs-up hidden-sm hidden-xs pull-right" style="font-size: 140px"></i>
            
            <h1 style="margin: 10px 0 20px 0"><?php echo lang('Community') ?></h1>
            
            <h3 style="margin: 10px 0 10px 0"><?php echo lang('Get envolved with ACME Framework') ?></h3>

        </div>

    </div>
    
</div>

<div class="module-breadcrumbs">

    <div class="container">

    <div class="row">

        <div class="col-sm-12">

            <ol class="breadcrumb">

                <li><a href="<?php echo URL_ROOT ?>" style="font-size: 18px"><i class="fa fa-fw fa-home"></i></a></li>
                
                <li><?php echo lang('Community') ?></li>

            </ol>

        </div>

    </div>

    </div>

</div>

<div class="module-body">

    <div class="row">

        <div class="col-sm-9">

            <p class="text-lead">
                <?php echo lang('ACME Framework has a strong and active community of people helping to make it even better. You can get envolved with the project by')?>
                <a href="#requesting-new-features"><?php echo lang('requesting new features')?></a>,
                <a href="#reporting-bugs"><?php echo lang('reporting bugs')?></a>,
                <a href="#submitting-pull-requests"><?php echo lang('submitting pull requests')?></a>,
                <a href="#helping-with-translation"><?php echo lang('helping with translations')?></a>,
                <a href="#sending-a-question"><?php echo lang('sending a question')?></a>,
                <?php echo lang('or just') ?>
                <a href="#saying-thanks"><?php echo lang('saying thanks')?></a>.
            </p>

            <br />

            <h4 id="requesting-new-features">
                <i class="fa fa-fw fa-star-o"></i>
                <?php echo lang('Request a new feature')?>
            </h4>
            <p>
                <?php echo lang('You can request a new feature through the ACME GitHub page project. Do the following steps:') ?>
                <ol>
                    <li>
                        <?php echo lang('Enter on ACME Framework') ?>
                        <a href="http://github.com/code-complex/acmeframework/issues" target="_blank"><?php echo lang('GitHub issues page')?></a>.
                    </li>
                    <li>
                        <?php echo lang('Check if a feature request like that already exist. If exist, please do not duplicate it - you can add a comment reinforcing it.') ?>
                    </li>
                    <li>
                        <?php echo lang('For adding a new request, please use the label') ?>
                        <code>New feature request: <?php echo lang('YOUR FEATURE') ?></code>.
                    </li>
                </ol>
            </p>

            <br />

            <h4 id="reporting-bugs">
                <i class="fa fa-fw fa-bug"></i>
                <?php echo lang('Report a bug')?>
            </h4>
            <p>
                <?php echo lang('Found a bug using ACME Framework? Report us and we will fix it with max priority.') ?>
                <ol>
                    <li>
                        <?php echo lang('Enter on ACME Framework') ?>
                        <a href="http://github.com/code-complex/acmeframework/issues" target="_blank"><?php echo lang('GitHub issues page')?></a>.
                    </li>
                    <li>
                        <?php echo lang('Check if someone has already reported exactly the same bug. If yes, please do not duplicate it; just add a comment so we can fix as soon as possible.') ?>
                    </li>
                    <li>
                        <?php echo lang('For reporting a new bug, please use the label') ?>
                        <code>Bug: <?php echo lang('BUG TITLE') ?></code>.
                    </li>
                    <li>
                        <?php echo lang('You can also fix the bug by your own, and then')?>
                        <a href="#submitting-pull-requests"><?php echo lang('submit the fix as a pull request') ?></a>.
                    </li>
                </ol>
            </p>

            <br />

            <h4 id="submitting-pull-requests">
                <i class="fa fa-fw fa-external-link-square"></i>
                <?php echo lang('Submit a pull request')?>
            </h4>
            <p>
                <?php echo lang('You can')?>
                <a href="http://github.com/code-complex/acmeframework/fork" target="_blank">fork</a>
                <?php echo lang('the project to fix a bug or to add a new feature by your own. Then you can submit a new pull request - we will verify and then merge it if everything is correct.')?>
                <strong><?php echo lang('Important:')?></strong>
                <?php echo lang('do not forget to add a comment referencing the bug fix or the new feature.')?>
            </p>

            <br />

            <h4 id="helping-with-translations">
                <i class="fa fa-fw fa-globe"></i>
                <?php echo lang('Help with translations')?>
            </h4>
            <p>
                <?php echo lang('If you know another language and want to improve ACME Framework by adding support for this language you can do it!')?>
                <ol>
                    <li>
                        <a href="http://github.com/code-complex/acmeframework/fork" target="_blank">Fork</a> 
                        <?php echo lang('the project and then clone it on your development server') ?>.
                    </li>
                    <li>
                        <?php echo lang('Copy and paste one of available language folders inside the path')?>
                        <code>application/languages</code>.
                    </li>
                    <li>
                        <?php echo lang('Rename this folder to one of available languages.')?>
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-languages"><?php echo lang('See languages')?></a>.
                    </li>
                    <li>
                        <?php echo lang('Inside the new language folder focus on file')?>
                        <code>app_lang.php</code>.
                        <?php echo lang('You have to translate')?>
                        <strong><?php echo lang('only the values of array')?></strong>
                        <code>$lang</code>
                        <?php echo lang('inside this file.')?>
                    </li>
                    <li>
                        <?php echo lang('Submit a new pull request with the new translation. Set the title as') ?>
                        <strong><?php echo lang('New language: lang_CODE') ?></strong>.
                    </li>
                </ol>
            </p>

            <br />

            <h4 id="sending-a-question">
                <i class="fa fa-fw fa-question-circle"></i>
                <?php echo lang('Send a question')?>
            </h4>
            <p>
                <?php echo lang('If you have any doubts using ACME Framework, send us a question to the address')?>
                <a href="mailto:questions@codecomplex.com.br">questions@codecomplex.com.br</a>
                <?php echo lang('and we answer it as soon as possible.')?>
            </p>

            <br />

            <h4 id="saying-thanks">
                <i class="fa fa-fw fa-heart"></i>
                <?php echo lang('Say thanks!')?>
            </h4>
            <p>
                <?php echo lang('Did you like to use ACME Framework and want to express this to us? Tell us your experience by sending a message to')?>
                <a href="mailto:thanks@codecomplex.com.br">thanks@codecomplex.com.br</a>.
                <?php echo lang('We can publish your testimonial in the home page project.')?>
                <i class="fa fa-fw fa-smile-o"></i>
            </p>

        </div>

        <div class="col-sm-3">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- ACME Framework ad#1 -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-3412601673416034"
                 data-ad-slot="6123586702"
                 data-ad-format="auto"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

    </div>

</div>

<div class="modal fade" id="modal-languages" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        
<div class="modal-dialog">
    
    <div class="modal-content">
        
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel"><?php echo lang('New menu')?></h4>
        </div>
        
        <div class="modal-body">

            <div class="table-responsive">

            <table class="table table-hover table-striped table-bordered no-footer">
                
                <thead>
                    <tr>
                        <th style="width: 01%"><?php echo lang('Language') ?></th>
                        <th style="width: 01%"><?php echo lang('Locale') ?></th>
                        <th><?php echo lang('Region')?></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td rowspan="4">Afar</td>
                        <td >aa</td>
                        <td >---</td>
                    </tr><tr><td>aa_DJ</td>
                        <td >Djibouti</td>
                    </tr><tr><td>aa_ER</td>
                        <td >Eritrea</td>
                    </tr><tr><td>aa_ET</td>
                        <td >Ethiopia</td>
                    </tr><tr><td rowspan="3" >Afrikaans</td>
                        <td >af</td>
                        <td >---</td>
                    </tr><tr><td>af_NA</td>
                        <td >Namibia</td>
                    </tr><tr><td>af_ZA</td>
                        <td >South Africa</td>
                    </tr><tr><td rowspan="2" >Akan</td>
                        <td >ak</td>
                        <td >---</td>
                    </tr><tr><td>ak_GH</td>
                        <td >Ghana</td>
                    </tr><tr><td rowspan="2" >Amharic</td>
                        <td >am</td>
                        <td >---</td>
                    </tr><tr><td>am_ET</td>
                        <td >Ethiopia</td>
                    </tr><tr><td rowspan="18" >Arabic</td>
                        <td >ar</td>
                        <td >---</td>
                    </tr><tr><td>ar_AE</td>
                        <td >United Arab Emirates</td>
                    </tr><tr><td>ar_BH</td>
                        <td >Bahrain</td>
                    </tr><tr><td>ar_DZ</td>
                        <td >Algeria</td>
                    </tr><tr><td>ar_EG</td>
                        <td >Egypt</td>
                    </tr><tr><td>ar_IQ</td>
                        <td >Iraq</td>
                    </tr><tr><td>ar_JO</td>
                        <td >Jordan</td>
                    </tr><tr><td>ar_KW</td>
                        <td >Kuwait</td>
                    </tr><tr><td>ar_LB</td>
                        <td >Lebanon</td>
                    </tr><tr><td>ar_LY</td>
                        <td >Libya</td>
                    </tr><tr><td>ar_MA</td>
                        <td >Morocco</td>
                    </tr><tr><td>ar_OM</td>
                        <td >Oman</td>
                    </tr><tr><td>ar_QA</td>
                        <td >Qatar</td>
                    </tr><tr><td>ar_SA</td>
                        <td >Saudi Arabia</td>
                    </tr><tr><td>ar_SD</td>
                        <td >Sudan</td>
                    </tr><tr><td>ar_SY</td>
                        <td >Syria</td>
                    </tr><tr><td>ar_TN</td>
                        <td >Tunisia</td>
                    </tr><tr><td>ar_YE</td>
                        <td >Yemen</td>
                    </tr><tr><td rowspan="2" >Assamese</td>
                        <td >as</td>
                        <td >---</td>
                    </tr><tr><td>as_IN</td>
                        <td >India</td>
                    </tr><tr><td rowspan="2" >Azerbaijani</td>
                        <td >az</td>
                        <td >---</td>
                    </tr><tr><td>az_AZ</td>
                        <td >Azerbaijan</td>
                    </tr><tr><td rowspan="2" >Belarusian</td>
                        <td >be</td>
                        <td >---</td>
                    </tr><tr><td>be_BY</td>
                        <td >Belarus</td>
                    </tr><tr><td rowspan="2" >Bulgarian</td>
                        <td >bg</td>
                        <td >---</td>
                    </tr><tr><td>bg_BG</td>
                        <td >Bulgaria</td>
                    </tr><tr><td rowspan="3" >Bengali</td>
                        <td >bn</td>
                        <td >---</td>
                    </tr><tr><td>bn_BD</td>
                        <td >Bangladesh</td>
                    </tr><tr><td>bn_IN</td>
                        <td >India</td>
                    </tr><tr><td rowspan="3" >Tibetan</td>
                        <td >bo</td>
                        <td >---</td>
                    </tr><tr><td>bo_CN</td>
                        <td >China</td>
                    </tr><tr><td>bn_IN</td>
                        <td >India</td>
                    </tr><tr><td rowspan="2" >Bosnian</td>
                        <td >bs</td>
                        <td >---</td>
                    </tr><tr><td>bs_BA</td>
                        <td >Bosnia and Herzegovina</td>
                    </tr><tr><td rowspan="2" >Blin</td>
                        <td >byn</td>
                        <td >---</td>
                    </tr><tr><td>byn_ER</td>
                        <td >Eritrea</td>
                    </tr><tr><td rowspan="2" >Catalan</td>
                        <td >ca</td>
                        <td >---</td>
                    </tr><tr><td>ca_ES</td>
                        <td >Spain</td>
                    </tr><tr><td rowspan="2" >Atsam</td>
                        <td >cch</td>
                        <td >---</td>
                    </tr><tr><td>cch_NG</td>
                        <td >Nigeria</td>
                    </tr><tr><td>Coptic</td>
                        <td >cop</td>
                        <td >---</td>
                    </tr><tr><td rowspan="2" >Czech</td>
                        <td >cs</td>
                        <td >---</td>
                    </tr><tr><td>cs_CZ</td>
                        <td >Czech Republic</td>
                    </tr><tr><td rowspan="2" >Welsh</td>
                        <td >cy</td>
                        <td >---</td>
                    </tr><tr><td>cy_GB</td>
                        <td >United Kingdom</td>
                    </tr><tr><td rowspan="2" >Danish</td>
                        <td >da</td>
                        <td >---</td>
                    </tr><tr><td>da_DK</td>
                        <td >Denmark</td>
                    </tr><tr><td rowspan="7" >German</td>
                        <td >de</td>
                        <td >---</td>
                    </tr><tr><td>de_AT</td>
                        <td >Austria</td>
                    </tr><tr><td>de_BE</td>
                        <td >Belgium</td>
                    </tr><tr><td>de_CH</td>
                        <td >Switzerland</td>
                    </tr><tr><td>de_DE</td>
                        <td >Germany</td>
                    </tr><tr><td>de_LI</td>
                        <td >Liechtenstein</td>
                    </tr><tr><td>de_LU</td>
                        <td >Luxembourg</td>
                    </tr><tr><td rowspan="2" >Divehi</td>
                        <td >dv</td>
                        <td >---</td>
                    </tr><tr><td>dv_MV</td>
                        <td >Maldives</td>
                    </tr><tr><td rowspan="2" >Dzongkha</td>
                        <td >dz</td>
                        <td >---</td>
                    </tr><tr><td>dz_BT</td>
                        <td >Bhutan</td>
                    </tr><tr><td rowspan="3" >Ewe</td>
                        <td >ee</td>
                        <td >---</td>
                    </tr><tr><td>ee_GH</td>
                        <td >Ghana</td>
                    </tr><tr><td>ee_TG</td>
                        <td >Togo</td>
                    </tr><tr><td rowspan="3" >Greek</td>
                        <td >el</td>
                        <td >---</td>
                    </tr><tr><td>el_CY</td>
                        <td >Cyprus</td>
                    </tr><tr><td>el_GR</td>
                        <td >Greece</td>
                    </tr><tr><td rowspan="27" >English</td>
                        <td >en</td>
                        <td >---</td>
                    </tr><tr><td>en_AS</td>
                        <td >American Samoa</td>
                    </tr><tr><td>en_AU</td>
                        <td >Australia</td>
                    </tr><tr><td>en_BE</td>
                        <td >Belgium</td>
                    </tr><tr><td>en_BW</td>
                        <td >Botswana</td>
                    </tr><tr><td>en_BZ</td>
                        <td >Belize</td>
                    </tr><tr><td>en_CA</td>
                        <td >Canada</td>
                    </tr><tr><td>en_GB</td>
                        <td >United Kingdom</td>
                    </tr><tr><td>en_GU</td>
                        <td >Guam</td>
                    </tr><tr><td>en_HK</td>
                        <td >Hong Kong</td>
                    </tr><tr><td>en_IE</td>
                        <td >Ireland</td>
                    </tr><tr><td>en_IN</td>
                        <td >India</td>
                    </tr><tr><td>en_JM</td>
                        <td >Jamaica</td>
                    </tr><tr><td>en_MH</td>
                        <td >Marshall Islands</td>
                    </tr><tr><td>en_MP</td>
                        <td >Northern Mariana Islands</td>
                    </tr><tr><td>en_MT</td>
                        <td >Malta</td>
                    </tr><tr><td>en_NA</td>
                        <td >Namibia</td>
                    </tr><tr><td>en_NZ</td>
                        <td >New Zealand</td>
                    </tr><tr><td>en_PH</td>
                        <td >Philippines</td>
                    </tr><tr><td>en_PK</td>
                        <td >Pakistan</td>
                    </tr><tr><td>en_SG</td>
                        <td >Singapore</td>
                    </tr><tr><td>en_TT</td>
                        <td >Trinidad and Tobago</td>
                    </tr><tr><td>en_UM</td>
                        <td >United States Minor Outlying Islands</td>
                    </tr><tr><td>en_US</td>
                        <td >United States</td>
                    </tr><tr><td>en_VI</td>
                        <td >U.S. Virgin Islands</td>
                    </tr><tr><td>en_ZA</td>
                        <td >South Africa</td>
                    </tr><tr><td>en_ZW</td>
                        <td >Zimbabwe</td>
                    </tr><tr><td>Esperanto</td>
                        <td >eo</td>
                        <td >---</td>
                    </tr><tr><td rowspan="21" >Spanish</td>
                        <td >es</td>
                        <td >---</td>
                    </tr><tr><td>es_AR</td>
                        <td >Argentina</td>
                    </tr><tr><td>es_BO</td>
                        <td >Bolivia</td>
                    </tr><tr><td>es_CL</td>
                        <td >Chile</td>
                    </tr><tr><td>es_CO</td>
                        <td >Colombia</td>
                    </tr><tr><td>es_CR</td>
                        <td >Costa Rica</td>
                    </tr><tr><td>es_DO</td>
                        <td >Dominican Republic</td>
                    </tr><tr><td>es_EC</td>
                        <td >Ecuador</td>
                    </tr><tr><td>es_ES</td>
                        <td >Spain</td>
                    </tr><tr><td>es_GT</td>
                        <td >Guatemala</td>
                    </tr><tr><td>es_HN</td>
                        <td >Honduras</td>
                    </tr><tr><td>es_MX</td>
                        <td >Mexico</td>
                    </tr><tr><td>es_NI</td>
                        <td >Nicaragua</td>
                    </tr><tr><td>es_PA</td>
                        <td >Panama</td>
                    </tr><tr><td>es_PE</td>
                        <td >Peru</td>
                    </tr><tr><td>es_PR</td>
                        <td >Puerto Rico</td>
                    </tr><tr><td>es_PY</td>
                        <td >Paraguay</td>
                    </tr><tr><td>es_SV</td>
                        <td >El Salvador</td>
                    </tr><tr><td>es_US</td>
                        <td >United States</td>
                    </tr><tr><td>es_UY</td>
                        <td >Uruguay</td>
                    </tr><tr><td>es_VE</td>
                        <td >Venezuela</td>
                    </tr><tr><td rowspan="2" >Estonian</td>
                        <td >et</td>
                        <td >---</td>
                    </tr><tr><td>et_EE</td>
                        <td >Estonia</td>
                    </tr><tr><td rowspan="2" >Basque</td>
                        <td >eu</td>
                        <td >---</td>
                    </tr><tr><td>eu_ES</td>
                        <td >Spain</td>
                    </tr><tr><td rowspan="3" >Persian</td>
                        <td >fa</td>
                        <td >---</td>
                    </tr><tr><td>fa_AF</td>
                        <td >Afghanistan</td>
                    </tr><tr><td>fa_IR</td>
                        <td >Iran</td>
                    </tr><tr><td rowspan="2" >Finnish</td>
                        <td >fi</td>
                        <td >---</td>
                    </tr><tr><td>fi_FI</td>
                        <td >Finland</td>
                    </tr><tr><td rowspan="2" >Filipino</td>
                        <td >fil</td>
                        <td >---</td>
                    </tr><tr><td>fil_PH</td>
                        <td >Philippines</td>
                    </tr><tr><td rowspan="2" >Faroese</td>
                        <td >fo</td>
                        <td >---</td>
                    </tr><tr><td>fo_FO</td>
                        <td >Faroe Islands</td>
                    </tr><tr><td rowspan="8" >French</td>
                        <td >fr</td>
                        <td >---</td>
                    </tr><tr><td>fr_BE</td>
                        <td >Belgium</td>
                    </tr><tr><td>fr_CA</td>
                        <td >Canada</td>
                    </tr><tr><td>fr_CH</td>
                        <td >Switzerland</td>
                    </tr><tr><td>fr_FR</td>
                        <td >France</td>
                    </tr><tr><td>fr_LU</td>
                        <td >Luxembourg</td>
                    </tr><tr><td>fr_MC</td>
                        <td >Monaco</td>
                    </tr><tr><td>fr_SN</td>
                        <td >Senegal</td>
                    </tr><tr><td rowspan="2" >Friulian</td>
                        <td >fur</td>
                        <td >---</td>
                    </tr><tr><td>fur_IT</td>
                        <td >Italy</td>
                    </tr><tr><td rowspan="2" >Irish</td>
                        <td >ga</td>
                        <td >---</td>
                    </tr><tr><td>ga_IE</td>
                        <td >Ireland</td>
                    </tr><tr><td rowspan="2" >Ga</td>
                        <td >gaa</td>
                        <td >---</td>
                    </tr><tr><td>gaa_GH</td>
                        <td >Ghana</td>
                    </tr><tr><td rowspan="3" >Geez</td>
                        <td >gez</td>
                        <td >---</td>
                    </tr><tr><td>gez_ER</td>
                        <td >Eritrea</td>
                    </tr><tr><td>gez_ET</td>
                        <td >Ethiopia</td>
                    </tr><tr><td rowspan="2" >Gallegan</td>
                        <td >gl</td>
                        <td >---</td>
                    </tr><tr><td>gl_ES</td>
                        <td >Spain</td>
                    </tr><tr><td rowspan="2" >Swiss German</td>
                        <td >gsw</td>
                        <td >---</td>
                    </tr><tr><td>gsw_CH</td>
                        <td >Swiss</td>
                    </tr><tr><td rowspan="2" >Gujarati</td>
                        <td >gu</td>
                        <td >---</td>
                    </tr><tr><td>gu_IN</td>
                        <td >India</td>
                    </tr><tr><td rowspan="2" >Manx</td>
                        <td >gv</td>
                        <td >---</td>
                    </tr><tr><td>gv_GB</td>
                        <td >United Kingdom</td>
                    </tr><tr><td rowspan="5" >Hausa</td>
                        <td >ha</td>
                        <td >---</td>
                    </tr><tr><td>ha_GH</td>
                        <td >Ghana</td>
                    </tr><tr><td>ha_NE</td>
                        <td >Niger</td>
                    </tr><tr><td>ha_NG</td>
                        <td >Nigeria</td>
                    </tr><tr><td>ha_SD</td>
                        <td >Sudan</td>
                    </tr><tr><td rowspan="2" >Hawaiian</td>
                        <td >haw</td>
                        <td >---</td>
                    </tr><tr><td>haw_US</td>
                        <td >United States</td>
                    </tr><tr><td rowspan="2" >Hebrew</td>
                        <td >he</td>
                        <td >---</td>
                    </tr><tr><td>he_IL</td>
                        <td >Israel</td>
                    </tr><tr><td rowspan="2" >Hindi</td>
                        <td >hi</td>
                        <td >---</td>
                    </tr><tr><td>hi_IN</td>
                        <td >India</td>
                    </tr><tr><td rowspan="2" >Croatian</td>
                        <td >hr</td>
                        <td >---</td>
                    </tr><tr><td>hr_HR</td>
                        <td >Croatia</td>
                    </tr><tr><td rowspan="2" >Hungarian</td>
                        <td >hu</td>
                        <td >---</td>
                    </tr><tr><td>hu_HU</td>
                        <td >Hungary</td>
                    </tr><tr><td>Armenian</td>
                        <td >hy</td>
                        <td >---</td>
                    </tr><tr><td>Interlingua</td>
                        <td >ia</td>
                        <td >---</td>
                    </tr><tr><td rowspan="2" >Indonesian</td>
                        <td >id</td>
                        <td >---</td>
                    </tr><tr><td>id_ID</td>
                        <td >Indonesia</td>
                    </tr><tr><td rowspan="2" >Igbo</td>
                        <td >ig</td>
                        <td >---</td>
                    </tr><tr><td>ig_NG</td>
                        <td >Nigeria</td>
                    </tr><tr><td rowspan="2" >Sichuan Yi</td>
                        <td >ii</td>
                        <td >---</td>
                    </tr><tr><td>ii_CN</td>
                        <td >China</td>
                    </tr><tr><td>Indonesian</td>
                        <td >in</td>
                        <td >---</td>
                    </tr><tr><td rowspan="2" >Icelandic</td>
                        <td >is</td>
                        <td >---</td>
                    </tr><tr><td>is_IS</td>
                        <td >Iceland</td>
                    </tr><tr><td rowspan="3" >Italian</td>
                        <td >it</td>
                        <td >---</td>
                    </tr><tr><td>it_CH</td>
                        <td >Switzerland</td>
                    </tr><tr><td>it_IT</td>
                        <td >Italy</td>
                    </tr><tr><td>Inuktitut</td>
                        <td >iu</td>
                        <td >---</td>
                    </tr><tr><td>Hebrew</td>
                        <td >iw</td>
                        <td >---</td>
                    </tr><tr><td rowspan="2" >Japanese</td>
                        <td >ja</td>
                        <td >---</td>
                    </tr><tr><td>ja_JP</td>
                        <td >Japan</td>
                    </tr><tr><td rowspan="2" >Georgian</td>
                        <td >ka</td>
                        <td >---</td>
                    </tr><tr><td>ka_GE</td>
                        <td >Georgia</td>
                    </tr><tr><td rowspan="2" >Jju</td>
                        <td >kaj</td>
                        <td >---</td>
                    </tr><tr><td>kaj_NG</td>
                        <td >Nigeria</td>
                    </tr><tr><td rowspan="2" >Kamba</td>
                        <td >kam</td>
                        <td >---</td>
                    </tr><tr><td>kam_KE</td>
                        <td >Kenya</td>
                    </tr><tr><td rowspan="2" >Tyap</td>
                        <td >kcg</td>
                        <td >---</td>
                    </tr><tr><td>kcg_NG</td>
                        <td >Nigeria</td>
                    </tr><tr><td rowspan="2" >Koro</td>
                        <td >kfo</td>
                        <td >---</td>
                    </tr><tr><td>kfo_CI</td>
                        <td >Ivory Coast</td>
                    </tr><tr><td rowspan="2" >Kazakh</td>
                        <td >kk</td>
                        <td >---</td>
                    </tr><tr><td>kk_KZ</td>
                        <td >Kazakhstan</td>
                    </tr><tr><td rowspan="2" >Kalaallisut</td>
                        <td >kl</td>
                        <td >---</td>
                    </tr><tr><td>kl_GL</td>
                        <td >Greenland</td>
                    </tr><tr><td rowspan="2" >Khmer</td>
                        <td >km</td>
                        <td >---</td>
                    </tr><tr><td>km_KH</td>
                        <td >Cambodia</td>
                    </tr><tr><td rowspan="2" >Kannada</td>
                        <td >kn</td>
                        <td >---</td>
                    </tr><tr><td>kn_IN</td>
                        <td >India</td>
                    </tr><tr><td rowspan="2" >Korean</td>
                        <td >ko</td>
                        <td >---</td>
                    </tr><tr><td>ko_KR</td>
                        <td >South Korea</td>
                    </tr><tr><td rowspan="2" >Konkani</td>
                        <td >kok</td>
                        <td >---</td>
                    </tr><tr><td>kok_IN</td>
                        <td >India</td>
                    </tr><tr><td rowspan="3" >Kpelle</td>
                        <td >kpe</td>
                        <td >---</td>
                    </tr><tr><td>kpe_GN</td>
                        <td >Guinea</td>
                    </tr><tr><td>kpe_LR</td>
                        <td >Liberia</td>
                    </tr><tr><td rowspan="2" >Kurdish</td>
                        <td >ku</td>
                        <td >---</td>
                    </tr><tr><td>ku_IQ</td>
                        <td >Iraq</td>
                    </tr><tr><td>ku_IR</td>
                        <td >Iran</td>
                    </tr><tr><td>ku_SY</td>
                        <td >Syria</td>
                    </tr><tr><td>ku_TR</td>
                        <td >Turkey</td>
                    </tr><tr><td rowspan="2" >Cornish</td>
                        <td >kw</td>
                        <td >---</td>
                    </tr><tr><td>kw_GB</td>
                        <td >United Kingdom</td>
                    </tr><tr><td rowspan="2" >Kirghiz</td>
                        <td >ky</td>
                        <td >---</td>
                    </tr><tr><td>ky_KG</td>
                        <td >Kyrgyzstan</td>
                    </tr><tr><td rowspan="3" >Lingala</td>
                        <td >ln</td>
                        <td >---</td>
                    </tr><tr><td>ln_CD</td>
                        <td >Congo - Kinshasa</td>
                    </tr><tr><td>ln_CG</td>
                        <td >Congo - Brazzaville</td>
                    </tr><tr><td rowspan="2" >Lao</td>
                        <td >lo</td>
                        <td >---</td>
                    </tr><tr><td>lo_LA</td>
                        <td >Laos</td>
                    </tr><tr><td rowspan="2" >Lithuanian</td>
                        <td >lt</td>
                        <td >---</td>
                    </tr><tr><td>lt_LT</td>
                        <td >Lithuania</td>
                    </tr><tr><td rowspan="2" >Latvian</td>
                        <td >lv</td>
                        <td >---</td>
                    </tr><tr><td>lv_LV</td>
                        <td >Latvia</td>
                    </tr><tr><td rowspan="2" >Macedonian</td>
                        <td >mk</td>
                        <td >---</td>
                    </tr><tr><td>mk_MK</td>
                        <td >Macedonia</td>
                    </tr><tr><td rowspan="2" >Malayalam</td>
                        <td >ml</td>
                        <td >---</td>
                    </tr><tr><td>ml_IN</td>
                        <td >India</td>
                    </tr><tr><td rowspan="3" >Mongolian</td>
                        <td >mn</td>
                        <td >---</td>
                    </tr><tr><td>mn_CN</td>
                        <td >China</td>
                    </tr><tr><td>mn_MN</td>
                        <td >Mongolia</td>
                    </tr><tr><td>Romanian</td>
                        <td >mo</td>
                        <td >---</td>
                    </tr><tr><td rowspan="2" >Marathi</td>
                        <td >mr</td>
                        <td >---</td>
                    </tr><tr><td>mr_IN</td>
                        <td >India</td>
                    </tr><tr><td rowspan="3" >Malay</td>
                        <td >ms</td>
                        <td >---</td>
                    </tr><tr><td>ms_BN</td>
                        <td >Brunei</td>
                    </tr><tr><td>ms_MY</td>
                        <td >Malaysia</td>
                    </tr><tr><td rowspan="2" >Maltese</td>
                        <td >mt</td>
                        <td >---</td>
                    </tr><tr><td>mt_MT</td>
                        <td >Malta</td>
                    </tr><tr><td rowspan="2" >Burmese</td>
                        <td >my</td>
                        <td >---</td>
                    </tr><tr><td>my_MM</td>
                        <td >Myanmar</td>
                    </tr><tr><td rowspan="2" >Norwegian Bokmal</td>
                        <td >nb</td>
                        <td >---</td>
                    </tr><tr><td>nb_NO</td>
                        <td >Norway</td>
                    </tr><tr><td rowspan="2" >Low German</td>
                        <td >nds</td>
                        <td >---</td>
                    </tr><tr><td>nds_DE</td>
                        <td >Germany</td>
                    </tr><tr><td rowspan="3" >Nepali</td>
                        <td >ne</td>
                        <td >---</td>
                    </tr><tr><td>ne_IN</td>
                        <td >India</td>
                    </tr><tr><td>ne_NP</td>
                        <td >Nepal</td>
                    </tr><tr><td rowspan="3" >Dutch</td>
                        <td >nl</td>
                        <td >---</td>
                    </tr><tr><td>nl_BE</td>
                        <td >Belgium</td>
                    </tr><tr><td>nl_NL</td>
                        <td >Netherlands</td>
                    </tr><tr><td rowspan="2" >Norwegian Nynorsk</td>
                        <td >nn</td>
                        <td >---</td>
                    </tr><tr><td>nn_NO</td>
                        <td >Norway</td>
                    </tr><tr><td>Norwegian</td>
                        <td >no</td>
                        <td >---</td>
                    </tr><tr><td rowspan="2" >South Ndebele</td>
                        <td >nr</td>
                        <td >---</td>
                    </tr><tr><td>nr_ZA</td>
                        <td >South Africa</td>
                    </tr><tr><td rowspan="2" >Northern Sotho</td>
                        <td >nso</td>
                        <td >---</td>
                    </tr><tr><td>nso_ZA</td>
                        <td >South Africa</td>
                    </tr><tr><td rowspan="2" >Nyanja</td>
                        <td >ny</td>
                        <td >---</td>
                    </tr><tr><td>ny_MW</td>
                        <td >Malawi</td>
                    </tr><tr><td rowspan="2" >Occitan</td>
                        <td >oc</td>
                        <td >---</td>
                    </tr><tr><td>oc_FR</td>
                        <td >France</td>
                    </tr><tr><td rowspan="3" >Oromo</td>
                        <td >om</td>
                        <td >---</td>
                    </tr><tr><td>om_ET</td>
                        <td >Ethiopia</td>
                    </tr><tr><td>om_KE</td>
                        <td >Kenya</td>
                    </tr><tr><td rowspan="2" >Oriya</td>
                        <td >or</td>
                        <td >---</td>
                    </tr><tr><td>or_IN</td>
                        <td >India</td>
                    </tr><tr><td rowspan="3" >Punjabi</td>
                        <td >pa</td>
                        <td >---</td>
                    </tr><tr><td>pa_IN</td>
                        <td >India</td>
                    </tr><tr><td>pa_PK</td>
                        <td >Pakistan</td>
                    </tr><tr><td rowspan="2" >Polish</td>
                        <td >pl</td>
                        <td >---</td>
                    </tr><tr><td>pl_PL</td>
                        <td >Poland</td>
                    </tr><tr><td rowspan="2" >Pashto</td>
                        <td >ps</td>
                        <td >---</td>
                    </tr><tr><td>ps_AF</td>
                        <td >Afghanistan</td>
                    </tr><tr><td rowspan="3" >Portuguese</td>
                        <td >pt</td>
                        <td >---</td>
                    </tr><tr><td>pt_BR</td>
                        <td >Brazil</td>
                    </tr><tr><td>pt_PT</td>
                        <td >Portugal</td>
                    </tr><tr><td rowspan="3" >Romanian</td>
                        <td >ro</td>
                        <td >---</td>
                    </tr><tr><td>ro_MD</td>
                        <td >Moldova</td>
                    </tr><tr><td>ro_RO</td>
                        <td >Romania</td>
                    </tr><tr><td rowspan="3" >Russian</td>
                        <td >ru</td>
                        <td >---</td>
                    </tr><tr><td>ru_RU</td>
                        <td >Russia</td>
                    </tr><tr><td>ru_UA</td>
                        <td >Ukraine</td>
                    </tr><tr><td rowspan="2" >Kinyarwanda</td>
                        <td >rw</td>
                        <td >---</td>
                    </tr><tr><td>rw_RW</td>
                        <td >Rwanda</td>
                    </tr><tr><td rowspan="2" >Sanskrit</td>
                        <td >sa</td>
                        <td >---</td>
                    </tr><tr><td>sa_IN</td>
                        <td >India</td>
                    </tr><tr><td rowspan="3" >Northern Sami</td>
                        <td >se</td>
                        <td >---</td>
                    </tr><tr><td>se_FI</td>
                        <td >Finland</td>
                    </tr><tr><td>se_NO</td>
                        <td >Norway</td>
                    </tr><tr><td rowspan="4" >Serbo-Croatian</td>
                        <td >sh</td>
                        <td >---</td>
                    </tr><tr><td>sh_BA</td>
                        <td >Bosnia and Herzegovina</td>
                    </tr><tr><td>sh_CS</td>
                        <td >Serbia and Montenegro</td>
                    </tr><tr><td>sh_YU</td>
                        <td >Serbia</td>
                    </tr><tr><td rowspan="2" >Sinhala</td>
                        <td >si</td>
                        <td >---</td>
                    </tr><tr><td>si_LK</td>
                        <td >Sri Lanka</td>
                    </tr><tr><td rowspan="2" >Sidamo</td>
                        <td >sid</td>
                        <td >---</td>
                    </tr><tr><td>sid_ET</td>
                        <td >Ethiopia</td>
                    </tr><tr><td rowspan="2" >Slovak</td>
                        <td >sk</td>
                        <td >---</td>
                    </tr><tr><td>sk_SK</td>
                        <td >Slovakia</td>
                    </tr><tr><td rowspan="2" >Slovenian</td>
                        <td >sl</td>
                        <td >---</td>
                    </tr><tr><td>sl_SI</td>
                        <td >Slovenia</td>
                    </tr><tr><td rowspan="5" >Somali</td>
                        <td >so</td>
                        <td >---</td>
                    </tr><tr><td>so_DJ</td>
                        <td >Djibouti</td>
                    </tr><tr><td>so_ET</td>
                        <td >Ethiopia</td>
                    </tr><tr><td>so_KE</td>
                        <td >Kenya</td>
                    </tr><tr><td>so_SO</td>
                        <td >Somalia</td>
                    </tr><tr><td rowspan="2" >Albanian</td>
                        <td >sq</td>
                        <td >---</td>
                    </tr><tr><td>sq_AL</td>
                        <td >Albania</td>
                    </tr><tr><td rowspan="6" >Serbian</td>
                        <td >sr</td>
                        <td >---</td>
                    </tr><tr><td>sr_BA</td>
                        <td >Bosnia and Herzegovina</td>
                    </tr><tr><td>sr_CS</td>
                        <td >Serbia and Montenegro</td>
                    </tr><tr><td>sr_ME</td>
                        <td >Montenegro</td>
                    </tr><tr><td>sr_RS</td>
                        <td >Serbia</td>
                    </tr><tr><td>sr_YU</td>
                        <td >Serbia</td>
                    </tr><tr><td rowspan="3" >Swati</td>
                        <td >ss</td>
                        <td >---</td>
                    </tr><tr><td>ss_SZ</td>
                        <td >Swaziland</td>
                    </tr><tr><td>ss_ZA</td>
                        <td >South Africa</td>
                    </tr><tr><td rowspan="3" >Southern Sotho</td>
                        <td >st</td>
                        <td >---</td>
                    </tr><tr><td>st_LS</td>
                        <td >Lesotho</td>
                    </tr><tr><td>st_ZA</td>
                        <td >South Africa</td>
                    </tr><tr><td rowspan="3" >Swedish</td>
                        <td >sv</td>
                        <td >---</td>
                    </tr><tr><td>sv_FI</td>
                        <td >Finland</td>
                    </tr><tr><td>sv_SE</td>
                        <td >Sweden</td>
                    </tr><tr><td rowspan="3" >Swahili</td>
                        <td >sw</td>
                        <td >---</td>
                    </tr><tr><td>sw_KE</td>
                        <td >Kenya</td>
                    </tr><tr><td>sw_TZ</td>
                        <td >Tanzania</td>
                    </tr><tr><td rowspan="2" >Syriac</td>
                        <td >syr</td>
                        <td >---</td>
                    </tr><tr><td>syr_SY</td>
                        <td >Syria</td>
                    </tr><tr><td rowspan="2" >Tamil</td>
                        <td >ta</td>
                        <td >---</td>
                    </tr><tr><td>ta_IN</td>
                        <td >India</td>
                    </tr><tr><td rowspan="2" >Telugu</td>
                        <td >te</td>
                        <td >---</td>
                    </tr><tr><td>te_IN</td>
                        <td >India</td>
                    </tr><tr><td rowspan="2" >Tajik</td>
                        <td >tg</td>
                        <td >---</td>
                    </tr><tr><td>tg_TJ</td>
                        <td >Tajikistan</td>
                    </tr><tr><td rowspan="2" >Thai</td>
                        <td >th</td>
                        <td >---</td>
                    </tr><tr><td>th_TH</td>
                        <td >Thailand</td>
                    </tr><tr><td rowspan="3" >Tigrinya</td>
                        <td >ti</td>
                        <td >---</td>
                    </tr><tr><td>ti_ER</td>
                        <td >Eritrea</td>
                    </tr><tr><td>ti_ET</td>
                        <td >Ethiopia</td>
                    </tr><tr><td rowspan="2" >Tigre</td>
                        <td >tig</td>
                        <td >---</td>
                    </tr><tr><td>tig_ER</td>
                        <td >Eritrea</td>
                    </tr><tr><td>Tagalog</td>
                        <td >tl</td>
                        <td >---</td>
                    </tr><tr><td rowspan="2" >Tswana</td>
                        <td >tn</td>
                        <td >---</td>
                    </tr><tr><td>tn_ZA</td>
                        <td >South Africa</td>
                    </tr><tr><td rowspan="2" >Tonga</td>
                        <td >to</td>
                        <td >---</td>
                    </tr><tr><td>to_TO</td>
                        <td >Tonga</td>
                    </tr><tr><td rowspan="2" >Turkish</td>
                        <td >tr</td>
                        <td >---</td>
                    </tr><tr><td>tr_TR</td>
                        <td >Turkey</td>
                    </tr><tr><td rowspan="2" >Taroko</td>
                        <td >trv</td>
                        <td >---</td>
                    </tr><tr><td>trv_TW</td>
                        <td >Taiwan</td>
                    </tr><tr><td rowspan="2" >Tsonga</td>
                        <td >ts</td>
                        <td >---</td>
                    </tr><tr><td>ts_ZA</td>
                        <td >South Africa</td>
                    </tr><tr><td rowspan="2" >Tatar</td>
                        <td >tt</td>
                        <td >---</td>
                    </tr><tr><td>tt_RU</td>
                        <td >Russia</td>
                    </tr><tr><td rowspan="2" >Uighur</td>
                        <td >ug</td>
                        <td >---</td>
                    </tr><tr><td>ug_CN</td>
                        <td >China</td>
                    </tr><tr><td rowspan="2" >Ukrainian</td>
                        <td >uk</td>
                        <td >---</td>
                    </tr><tr><td>uk_UA</td>
                        <td >Ukraine</td>
                    </tr><tr><td rowspan="3" >Urdu</td>
                        <td >ur</td>
                        <td >---</td>
                    </tr><tr><td>ur_IN</td>
                        <td >India</td>
                    </tr><tr><td>ur_PK</td>
                        <td >Pakistan</td>
                    </tr><tr><td rowspan="3" >Uzbek</td>
                        <td >uz</td>
                        <td >---</td>
                    </tr><tr><td>uz_AF</td>
                        <td >Afghanistan</td>
                    </tr><tr><td>uz_UZ</td>
                        <td >Uzbekistan</td>
                    </tr><tr><td rowspan="2" >Venda</td>
                        <td >ve</td>
                        <td >---</td>
                    </tr><tr><td>ve_ZA</td>
                        <td >South Africa</td>
                    </tr><tr><td rowspan="2" >Vietnamese</td>
                        <td >vi</td>
                        <td >---</td>
                    </tr><tr><td>vi_VN</td>
                        <td >Vietnam</td>
                    </tr><tr><td rowspan="2" >Walamo</td>
                        <td >wal</td>
                        <td >---</td>
                    </tr><tr><td>wal_ET</td>
                        <td >Ethiopia</td>
                    </tr><tr><td rowspan="2" >Wolof</td>
                        <td >wo</td>
                        <td >---</td>
                    </tr><tr><td>wo_SN</td>
                        <td >Senegal</td>
                    </tr><tr><td rowspan="2" >Xhosa</td>
                        <td >xh</td>
                        <td >---</td>
                    </tr><tr><td>xh_ZA</td>
                        <td >South Africa</td>
                    </tr><tr><td rowspan="2" >Yoruba</td>
                        <td >yo</td>
                        <td >---</td>
                    </tr><tr><td>yo_NG</td>
                        <td >Nigeria</td>
                    </tr><tr><td rowspan="6" >Chinese</td>
                        <td >zh</td>
                        <td >---</td>
                    </tr><tr><td>zh_CN</td>
                        <td >China</td>
                    </tr><tr><td>zh_HK</td>
                        <td >Hong Kong</td>
                    </tr><tr><td>zh_MO</td>
                        <td >Macau</td>
                    </tr><tr><td>zh_SG</td>
                        <td >Singapore</td>
                    </tr><tr><td>zh_TW</td>
                        <td >Taiwan</td>
                    </tr><tr><td rowspan="2" >Zulu</td>
                        <td >zu</td>
                        <td >---</td>
                    </tr><tr><td>zu_ZA</td>
                        <td >South Africa</td>
                    </tr>
                </tbody>
            
            </table>
            
            </div>

        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo lang('Close') ?></button>
        </div>

    </div>

</div>

</div>