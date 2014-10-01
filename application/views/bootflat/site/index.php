<div class="module-header">

    <div class="row">

        <div class="col-sm-12 col-md-7">

            <div class="text-center">
            
            <h1 style="margin: 10px 0 20px 0">ACME Framework</h1>
            
            <h2 style="margin: 10px 0 30px 0"><?php echo lang('Build PHP applications has never been easier!') ?></h2>

            <a class="btn btn-lg btn-success" href="https://github.com/code-complex/acmeframework/archive/<?php echo ACME_VERSION ?>.zip" style="margin-bottom: 15px">
                <i class="fa fa-fw fa-download"></i>
                <?php echo lang('Free download') ?>
                <br />
                <small class="pull-right"><?php echo lang('Version') ?> <?php echo ACME_VERSION ?></small>
            </a>

            &nbsp;
            &nbsp;

            <a class="btn btn-lg btn-default" href="<?php echo URL_ROOT ?>/oracle" style="margin-bottom: 15px">
                <i class="fa fa-fw fa-arrow-circle-right"></i>
                <?php echo lang('Get for Oracle') ?>
                <br />
                <small class="text-muted pull-right"><?php echo lang('Only US$ 29,99')?></small>
            </a>

            <div style="margin: 15px 0 0">
                
                <small>

                    <a href="http://github.com/code-complex/acmeframework" target="_blank"><?php echo lang('GitHub page') ?></a>

                    &nbsp;
                    &bull;
                    &nbsp;

                    <a href="<?php echo URL_ROOT ?>/docs/older-versions"><?php echo lang('Older versions') ?></a>

                    &nbsp;
                    &bull;
                    &nbsp;

                    <?php echo lang('Created by') ?> <a href="http://twitter.com/leanndro" target="_blank">Leandro Antunes</a>

                    &nbsp;
                    &bull;
                    &nbsp;

                    <?php echo lang('Maintained by') ?> <a href="http://www.codecomplex.com.br" target="_blank">Code Complex</a>

                </small>

            </div>

        </div>

        </div>

        <div class="col-md-4 col-md-offset-1">

            <div id="img-carousel" class="carousel slide" data-ride="carousel">

                <!-- Carousel items -->
                <div class="carousel-inner">

                    <div class="item active"><div><img src="<?php echo URL_UPLOAD ?>/app-ss-01.png" class="img-responsive img-rounded"/></div></div>

                    <div class="item"><div><img src="<?php echo URL_UPLOAD ?>/app-ss-02.png" class="img-responsive img-rounded" /></div></div>

                    <div class="item"><div><img src="<?php echo URL_UPLOAD ?>/app-ss-03.png" class="img-responsive img-rounded" /></div></div>

                    <div class="item"><div><img src="<?php echo URL_UPLOAD ?>/app-ss-04.png" class="img-responsive img-rounded" /></div></div>

                    <div class="item"><div><img src="<?php echo URL_UPLOAD ?>/app-ss-05.png" class="img-responsive img-rounded" /></div></div>
                    
                    <div class="item"><div><img src="<?php echo URL_UPLOAD ?>/app-ss-06.png" class="img-responsive img-rounded" /></div></div>

                    <div class="item"><div><img src="<?php echo URL_UPLOAD ?>/app-ss-07.png" class="img-responsive img-rounded" /></div></div>

                </div>

                <!-- Carousel nav -->
                <a class="carousel-control left" href="#img-carousel" data-slide="prev">
                    <i class="fa fa-arrow-circle-left"></i>
                </a>

                <a class="carousel-control right" href="#img-carousel" data-slide="next">
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            
            </div>

        </div>

    </div>
    
</div>

<div class="module-social">

    <div class="container">

    <div class="row">

        <div class="col-sm-12">

            <div class="text-center">

            <iframe src="http://ghbtns.com/github-btn.html?user=code-complex&repo=acmeframework&type=watch&count=true"
            allowtransparency="true" frameborder="0" scrolling="0" width="100" height="20"></iframe>

            <iframe src="http://ghbtns.com/github-btn.html?user=code-complex&repo=acmeframework&type=fork&count=true"
            allowtransparency="true" frameborder="0" scrolling="0" width="100" height="20"></iframe>

            <iframe src="http://ghbtns.com/github-btn.html?user=code-complex&repo=acmeframework&type=follow&count=true"
            allowtransparency="true" frameborder="0" scrolling="0" width="200" height="20"></iframe>

            <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Facmeframework&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21&amp;appId=133367283442799" 
            scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" width="160" allowTransparency="true"></iframe>

            <a href="https://twitter.com/acmeframework" class="twitter-follow-button" data-show-count="false">Follow @acmeframework</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

            </div>

        </div>

    </div>

    </div>

</div>

<div class="module-body">

    <div class="row">

        <div class="col-sm-12">

            <p class="text-lead"><?php echo lang('ACME Framework is a CodeIgniter powerful PHP pre-application that after installed on your server become an awesome single new application with a lot of features.')?> <a href="https://github.com/code-complex/acmeframework/archive/<?php echo ACME_VERSION ?>.zip"><?php echo lang('Get it now') ?></a> <?php echo lang('or') ?> <a href="http://demo.acmeframework.org" target="_blank"><?php echo lang('See a demo!') ?></a></p>

            <div class="row" style="margin-top: 30px">

                <div class="col-sm-4">

                    <h3><?php echo lang('Global features') ?></h3>

                    <p><?php echo lang('ACME Framework has a lot of cool and powerful features:')?></p>

                    <ul>
                        <li><?php echo lang('Support for MySQL, PostgreSQL and Oracle databases')?></li>
                        <li><?php echo lang('Beautyful theme')?></li>
                        <li><?php echo lang('Login page')?></li>
                        <li><?php echo lang('Users, groups and permissions')?></li>
                        <li><?php echo lang('Generic dashboard')?></li>
                        <li><?php echo lang('Dynamic menus')?></li>
                        <li><?php echo lang('Logs management')?></li>
                        <li><?php echo lang('Module builder (CRUD generator)')?></li>
                        <li><?php echo lang('100% mobile support')?></li>
                    </ul>

                </div>

                <div class="col-sm-4">

                    <h3><?php echo lang('Technologies') ?></h3>

                    <p><?php echo lang('ACME Framework is builded and uses some of the better technologies:') ?></p>

                    <ul>
                        <li>CodeIgniter (php - 2.2.0)</li>
                        <li>Bootstrap (css|js - 3.1.1)</li>
                        <li>Bootflat (css|js - 2.0.1)</li>
                        <li>Bootbox (js - 4.2.0)</li>
                        <li>DataTables (css|js - 1.10.0)</li>
                        <li>Dropzone (js - latest release)</li>
                        <li>iCheck (css|js - 1.0.2)</li>
                        <li>imgAreaSelect (css|js - 0.9.10)</li>
                        <li>MagicSuggest (css|js - latest release)</li>
                        <li>MeioMask (js - 1.1.13)</li>
                        <li>Nestable (js - latest release)</li>
                        <li>ValidationEngine (js - 2.6.2)</li>
                    </ul>

                </div>

                <div class="col-sm-4">

                    <h3><?php echo lang('Requirements') ?></h3>

                    <p><?php echo lang('Use ACME Framework does not require a lot of resources. You just need:') ?></p>

                    <ul>
                        <li>PHP 5.3.5+</li>
                        <li>MySQL 5.0+, PostgreSQL 9.0+ or Oracle 10G+</li>
                        <li>MySQL, PostgreSQL or Oracle PHP extension</li>
                        <li>Apache rewrite engine</li>
                    </ul>

                </div>

            </div>

        </div>

    </div>

</div>
