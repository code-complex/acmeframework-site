<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo APP_NAME ?> | <?php echo lang('A powerful CodeIgniter application framework') ?></title>

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo URL_JS ?>/jquery-2.1.3.min.js"></script>
    <script src="<?php echo URL_CSS ?>/bootstrap/js/bootstrap.min.js"></script>

    <!-- App Scripts - Include with every page -->
    <script src="<?php echo URL_JS ?>/app-functions.js"></script>

    <!-- CSS Assets - Include with every page -->
    <link href="<?php echo URL_CSS ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo URL_CSS ?>/bootflat/css/bootflat.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo URL_CSS ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Plugins Section -->

    <!-- Bootbox Plugin -->
    <script src="<?php echo URL_JS ?>/bootbox/bootbox.min.js"></script>

    <!-- MagicSuggest Plugin -->
    <link href="<?php echo URL_JS ?>/magicsuggest/magicsuggest-min.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo URL_JS ?>/magicsuggest/magicsuggest-min.js"></script>

    <!-- ValidationEngine Plugin -->
    <link href="<?php echo URL_JS ?>/validationEngine/css/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo URL_JS ?>/validationEngine/js/jquery.validationEngine.js"></script>
    <script src="<?php echo URL_JS ?>/validationEngine/js/languages/jquery.validationEngine-<?php echo $this->session->userdata('language') ?>.js"></script>

    <!-- Meiomask Plugin -->
    <script src="<?php echo URL_JS ?>/jquery-meiomask/meiomask.js"></script>

    <!-- Plugins Section -->

    <!-- CSS Template - Override other styles -->
    <link href="<?php echo URL_TEMPLATE ?>/styles.css" rel="stylesheet" type="text/css" />

    <!-- CSS Site - Override other styles -->
    <link href="<?php echo URL_TEMPLATE ?>/site.css" rel="stylesheet" type="text/css" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo URL_IMG ?>/favicon.ico">

    <!-- Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-64200429-1', 'auto');
        ga('send', 'pageview');
    </script>

</head>

<body>

    <!-- Loading layer -->
    <div class="loading-layer"></div>
    <div class="loading-box"><h4><i class="fa fa-fw fa-circle-o-notch fa-spin"></i> <?php echo lang('Loading')?></h4></div>

    <!-- Application constants hidden inputs -->
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

                    <li><a href="<?php echo URL_ROOT ?>/docs"><?php echo lang('Documentation')?></a></li>

                    <li><a href="<?php echo URL_ROOT ?>/community"><?php echo lang('Community')?></a></li>

                </ul>

            </div>

        </div>

        <!-- Content loaded by View -->
        <div id="page-wrapper"> <?php echo $html ?> </div>

    </div>

    <script>

        // Put all HTML into a container
        $.container_html();

        // Tooltips
        $('body').tooltip({
            selector: "[data-toggle=tooltip]",
            container: "body"
        });

        // =================
        // Language callback
        // =================
        $('a.change-language').on('click', function () {
            $.change_language_custom($(this).attr('id'));
        });

        // ======================
        // Custom change language
        // ======================
        $.change_language_custom = function (language) {

            if (language == 'pt_BR') {
                bootbox.alert("<?php echo lang('Sorry but this language is not available yet. You can get even more envolved with the project and help us translating this website. Send an email to the address')?> <a href=\"mailto:questions@codecomplex.com.br?subject=I want to translate ACME Framework website\">questions@codecomplex.com.br</a> asking to translate. <?php echo lang('Thank you!') ?>");
                return;
            }

            $.enable_loading();

            $.ajax({
                url: $('#URL_ROOT').val() + '/app-login/change-language/' + language,
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

</body>

</html>
