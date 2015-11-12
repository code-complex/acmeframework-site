<div class="module-header front-page">

    <div class="row">

        <div class="col-sm-10 col-sm-offset-1">

            <div class="text-center">

                <br />
                <h1>ACME Framework</h1>
                <br />

                <p class="text-lead text-center">
                    <?php echo lang('ACME Framework is a CodeIgniter powerful small application with a lot of features ready-to-use like')?> <strong><?php echo lang('login') ?></strong>, <strong><?php echo lang('users') ?></strong>, <strong><?php echo lang('permissions') ?></strong>, <strong><?php echo lang('menus') ?></strong>, a <strong><?php echo lang('powerful API') ?></strong> and <strong><?php echo lang('more') ?></strong>.

                    <a href="<?php echo URL_ROOT ?>/docs"><?php echo lang('Read the docs') ?></a>
                    <?php echo lang('or') ?>
                    <a href="https://www.github.com/code-complex/acmeframework" target="_blank"><?php echo lang('View on Github') ?></a>.
                </p>

                <br />

                <a class="btn btn-md btn-success" onclick="ga('send', 'event', 'Downloads', 'download-version-<?php echo ACME_VERSION ?>', 'Download Version <?php echo ACME_VERSION ?>');" href="https://github.com/code-complex/acmeframework/archive/<?php echo ACME_VERSION ?>.zip" style="margin-bottom: 15px">
                    <h4 style="margin: 5px 0">
                        <i class="fa fa-fw fa-download"></i>
                        <?php echo lang('Free download') ?>
                    </h4>
                    <small class="pull-right"><?php echo lang('Version') ?> <?php echo ACME_VERSION ?></small>
                </a>

                &nbsp;
                &nbsp;

                <a class="btn btn-md btn-default" onclick="ga('send', 'event', 'Demo', 'see-a-demo', 'See a Demo');" href="http://demo.acmeframework.org" style="margin-bottom: 15px">
                    <h4 style="margin: 5px 0">
                        <i class="fa fa-fw fa-external-link-square"></i>
                        <?php echo lang('See a demo') ?>
                    </h4>
                    <small class="pull-right"><?php echo lang('Web application')?></small>
                </a>

            </div>

        </div>

    </div>

    <div class="row">

        <div class="col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">

            <br />

            <div class="panel panel-default browser-window">

                <div class="panel-heading circles">
                    <div class="circle circle-red"></div>
                    <div class="circle circle-yellow"></div>
                    <div class="circle circle-green"></div>
                </div>

                <div class="panel-body content">

                    <div class="carousel slide" id="carousel-site" data-ride="slide" data-interval="3000">

                        <div class="carousel-inner">

                            <div class="item active">

                                <pre class="code-php">
&lt;?php
/**
 * Controller/Module Site
 */
class Site extends ACME_Controller {

    // Define if controller is external or not
    protected $external = true;

    // Initialize ACME Core and CI_Controller
    public function __construct()
    {
        parent::__construct();
    }

    // Map to URL site/something
    public function something()
    {
        $this->template->load_view($this->controller . '/something');
    }
}
                                </pre>

                            </div>

                            <div class="item"><div><img src="<?php echo URL_UPLOAD ?>/site-content/app-installer.png" class="img-responsive"/></div></div>

                            <div class="item"><div><img src="<?php echo URL_UPLOAD ?>/site-content/app-login.png" class="img-responsive" /></div></div>

                            <div class="item"><img src="<?php echo URL_UPLOAD ?>/site-content/app-dashboard.png" class="img-responsive" /></div>

                            <div class="item"><img src="<?php echo URL_UPLOAD ?>/site-content/app-module-manager.png" class="img-responsive" /></div>

                            <div class="item"><img src="<?php echo URL_UPLOAD ?>/site-content/app-settings.png" class="img-responsive" /></div>

                            <div class="item"><img src="<?php echo URL_UPLOAD ?>/site-content/app-logs.png" class="img-responsive" /></div>

                            <div class="item"><img src="<?php echo URL_UPLOAD ?>/site-content/app-menus.png" class="img-responsive" /></div>

                            <div class="item"><img src="<?php echo URL_UPLOAD ?>/site-content/app-users.png" class="img-responsive" /></div>

                            <div class="item"><img src="<?php echo URL_UPLOAD ?>/site-content/app-profile.png" class="img-responsive" /></div>

                            <div class="item"><img src="<?php echo URL_UPLOAD ?>/site-content/app-permissions.png" class="img-responsive" /></div>

                        </div>

                        <a class="left carousel-control" href="#carousel-site" role="button" data-slide="prev">
                            <span class="fa-stack fa-1x">
                              <i class="fa fa-circle-thin fa-stack-2x"></i>
                              <i class="fa fa-arrow-left fa-stack-1x"></i>
                            </span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <a class="right carousel-control" href="#carousel-site" role="button" data-slide="next">
                            <span class="fa-stack fa-1x">
                              <i class="fa fa-circle-thin fa-stack-2x"></i>
                              <i class="fa fa-arrow-right fa-stack-1x"></i>
                            </span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="module-body front-page">

    <div class="row">

        <div class="col-sm-12">

            <div class="row" style="margin-top: 30px">

                <div class="col-sm-4">

                    <div class="text-center"><i class="fa fa-fw fa-cubes fa-5x"></i></div>
                    <br />
                    <h3 class="text-center"><?php echo lang('Global features') ?></h3>
                    <br />
                    <p><?php echo lang('ACME Framework has a lot of cool and powerful features:')?></p>

                    <ul>
                        <li><?php echo lang('Support for MySQL, PostgreSQL and Oracle databases')?></li>
                        <li><?php echo lang('Beautyful theme')?></li>
                        <li><?php echo lang('Login page')?></li>
                        <li><?php echo lang('Users, groups and permissions')?></li>
                        <li><?php echo lang('Generic dashboard')?></li>
                        <li><?php echo lang('Dynamic menus')?></li>
                        <li><?php echo lang('Errors mapper')?></li>
                        <li><?php echo lang('Logs management')?></li>
                        <li><?php echo lang('Module builder (CRUD generator)')?></li>
                        <li><?php echo lang('100% mobile support')?></li>
                    </ul>

                </div>

                <div class="col-sm-4">

                    <div class="text-center"><i class="fa fa-fw fa-code fa-5x"></i></div>
                    <br />
                    <h3 class="text-center"><?php echo lang('Technologies') ?></h3>
                    <br />

                    <p><?php echo lang('ACME Framework is builded and uses some of the better technologies:') ?></p>

                    <ul>
                        <li>CodeIgniter (php - 3.0.0)</li>
                        <li>Bootstrap (css, js - 3.3.4)</li>
                        <li>Bootflat (css, js - 2.0.4)</li>
                        <li>Bootbox (js - 4.4.0)</li>
                        <li>DataTables (css, js - 1.10.6)</li>
                        <li>Dropzone (js - latest release)</li>
                        <li>imgAreaSelect (css, js - 0.9.10)</li>
                        <li>MagicSuggest (css, js - latest release)</li>
                        <li>MeioMask (js - 1.1.14)</li>
                        <li>Nestable (js - latest release)</li>
                        <li>ValidationEngine (js - 2.6.2)</li>
                    </ul>

                </div>

                <div class="col-sm-4">

                    <div class="text-center"><i class="fa fa-fw fa-server fa-5x"></i></div>
                    <br />
                    <h3 class="text-center"><?php echo lang('Requirements') ?></h3>
                    <br />

                    <p><?php echo lang('Use ACME Framework does not require a lot of resources. You just need:') ?></p>

                    <ul>
                        <li>PHP 5.3.5+</li>
                        <li>MySQL 5.0+, PostgreSQL 9.0+ or Oracle 10G+</li>
                        <li>MySQL, PostgreSQL or Oracle PHP extension</li>
                        <li>Apache rewrite engine (for apache webservers)</li>
                    </ul>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="module-social">

    <div class="container">

        <h2 class="text-center"><?php echo lang('Get in touch!') ?> <i class="fa fa-fw fa-comments"></i></h2>

        <br />
        <br />

        <div class="row">

            <div class="col-sm-3">

                <h3>Github</h3>

                <p class="text-lead"><?php echo lang('View and star ')?> <a href="http://www.github.com/code-complex/acmeframework" target="_blank"><?php echo lang('project on Github')?></a>.</p>

                <hr />

                <iframe src="http://ghbtns.com/github-btn.html?user=code-complex&repo=acmeframework&type=watch&count=true"
                allowtransparency="true" frameborder="0" scrolling="0" width="100" height="20"></iframe>

                <iframe src="http://ghbtns.com/github-btn.html?user=code-complex&repo=acmeframework&type=fork&count=true"
                allowtransparency="true" frameborder="0" scrolling="0" width="100" height="20"></iframe>

            </div>

            <div class="col-sm-3">

                <h3>Twitter</h3>

                <p class="text-lead"><?php echo lang('Follow @acmeframework and')?> <a href="http://www.twitter.com/leandrowkz" target="_blank">@leandrowkz</a> <?php echo lang('on Twitter') ?>.</p>

                <hr />

                <a href="https://twitter.com/acmeframework" class="twitter-follow-button" data-show-count="false">@acmeframework</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

            </div>

            <div class="col-sm-3">

                <h3>Facebook</h3>

                <p class="text-lead"><?php echo lang('Like Facebook ACME Framework')?> <a href="http://www.facebook.com/acmeframework" target="_blank"><?php echo lang('project page') ?></a>.</p>

                <hr />

                <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Facmeframework&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21&amp;appId=133367283442799"
                scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" width="160" allowTransparency="true"></iframe>

            </div>

            <div class="col-sm-3">

                <h3>Code Complex</h3>

                <p class="text-lead"><?php echo lang('Visit the maintainers company page') ?>.</p>

                <hr />

                <a href="http://www.codecomplex.com.br" target="_blank" class="btn btn-xs btn-primary">Code Complex <i class="fa fa-fw fa-external-link-square"></i></a>

            </div>

        </div>

    </div>

</div>

<!-- JQuery Snippet Highlighter Plugin -->
<script type="text/javascript" src="<?php echo URL_JS ?>/jquery-snippet/jquery.snippet.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo URL_JS ?>/jquery-snippet/jquery.snippet.min.css" />

<script type="text/javascript">
    $(document).ready(function(){
        $("pre.code-php").snippet("php", { style : "ide-codewarrior", menu : false });
    });
</script>
