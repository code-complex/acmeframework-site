<div id="docs-quick-start">

    <h2 class="main-title"><?php echo lang('Quick start') ?></h2>

    <div id="docs-installation">

        <h3 class="sub-title"><?php echo lang('Installation') ?></h3>

        <p>
            <?php echo lang('Start using ACME Framework is an easier process. You do not need any special technology, just ') ?>
            <a href="https://github.com/code-complex/acmeframework/archive/<?php echo ACME_VERSION ?>.zip"><?php echo lang('download the latest release')?></a>,
            <?php echo lang('put inside your web server and access the folder through a browser. A page like this must appear:') ?>
        </p>

        <div class="panel panel-default browser-window">

            <div class="panel-heading circles">
                <div class="circle circle-red"></div>
                <div class="circle circle-yellow"></div>
                <div class="circle circle-green"></div>
            </div>

            <div class="panel-body content">
                <img src="<?php echo URL_UPLOAD ?>/site-content/app-installer.png" class="img-responsive" />
            </div>

        </div>

        <br />

        <p>
            <?php echo lang('Advance the installation throught the steps. At the end you will have a new application.') ?>
        </p>

    </div>

    <br />

    <div id="docs-updating">

        <h3 class="sub-title"><?php echo lang('Updating') ?></h3>

        <p><?php echo lang('Maybe you are using an old ACME Framework version and want to upgrade it. This procedure depends on which version you are currently using.') ?></p>

        <p><?php echo message('warning', lang('Caution!'), lang('This procedures will replace all ACME Framework base files, so if you have changed any file from ACME Framework you have to back it up first.')) ?></p>

        <div class="updating">

            <a href="javascript:void(0)"><h4 style="margin-top: 30px"><?php echo lang('From version 2.x.x to 3.0.0') ?> <i class="fa fa-fw fa-caret-right"></i></h4></a>

            <div class="updating-content hidden">
                <p>
                    <?php echo lang('Upgrading ACME from version 2.x.x to version 3.0.0 is simple. You just have to')?>
                    <a href="https://github.com/code-complex/acmeframework/archive/<?php echo ACME_VERSION ?>.zip"><?php echo lang('download the latest release') ?></a>
                    <?php echo lang('and unzip it inside your current project. After that, follow these steps below:') ?>

                    <ol>
                        <li><?php echo lang('Update all your controllers, changing the extends from')?> <code>ACME_Module_Controller</code> to <code>ACME_Controller</code>.</li>
                        <li><?php echo lang('Update any calls to the Library Log, like') ?> <code>$this->log</code> <?php echo lang('to') ?> <code>$this->logger</code>.</li>
                    </ol>
                </p>

                <p><?php echo lang('And that is it! Your application must be updated now.')?></p>
            </div>

        </div>

        <div class="updating">

            <a href="javascript:void(0)"><h4 style="margin-top: 30px"><?php echo lang('From version 2.2.10 to 2.3.12') ?> <i class="fa fa-fw fa-caret-right"></i></h4></a>

            <div class="updating-content hidden">
                <p>
                    <?php echo lang('Upgrading ACME from version 2.2.10 to version 2.3.12 is a simple task. You just have to')?>
                    <a href="https://github.com/code-complex/acmeframework/archive/<?php echo ACME_VERSION ?>.zip"><?php echo lang('download the latest release') ?></a>
                    <?php echo lang('and unzip it inside your current project. After that, open the file') ?>
                    application/core/acme/<strong>acme_core_controller.php</strong>
                    <?php echo lang('and change the line:') ?>
                </p>

                <p><code>public $acme_installed = false;</code></p>

                <p><?php echo lang('to the value:') ?></p>

                <p><code>public $acme_installed = true;</code></p>

                <p><?php echo lang('And that is it! Your application must be updated now.')?></p>
            </div>

        </div>

        <div class="updating">

            <a href="javascript:void(0)"><h4 style="margin-top: 30px"><?php echo lang('From version 2.2.9 (and below) to 2.3.12') ?> <i class="fa fa-fw fa-caret-right"></i></h4></a>

            <div class="updating-content hidden">

                <p><?php echo lang('This is a bit more complicated process. Back up the following files on your project:') ?></p>

                <p>
                    <code>application/config/ENVIRONMENT/database.php</code><br />
                    <code>application/config/ENVIRONMENT/app_settings.php</code>
                </p>

                <p>
                    <?php echo lang('After you did that')?>,
                    <a href="https://github.com/code-complex/acmeframework/archive/<?php echo ACME_VERSION ?>.zip"><?php echo lang('download the latest release') ?></a>
                    <?php echo lang('and unzip it inside your current project. Return the files you saved into their original place. After that, open the file') ?>
                    application/core/acme/<strong>acme_core_controller.php</strong>
                    <?php echo lang('and change the line:') ?>
                </p>

                <p><code>public $acme_installed = false;</code></p>

                <p><?php echo lang('to the value:') ?></p>

                <p><code>public $acme_installed = true;</code></p>

                <p><?php echo lang('And that is it! Your application must be updated now.')?></p>

            </div>

        </div>

        <div class="updating">

            <a href="javascript:void(0)"><h4 style="margin-top: 30px"><?php echo lang('From version 1.0.0 (also known as ACME Engine) to a recent version') ?> <i class="fa fa-fw fa-caret-right"></i></h4></a>

            <div class="updating-content hidden">

                <p>
                    <?php echo lang('There is no way to upgrade your application from version')?>
                    <code>1.x.x</code>
                    <?php echo lang('to version')?>
                    <code>2.x.x</code>.
                    <?php echo lang('All the framework structure is different and this impacts on a possible upgrading. But if you want you can read the full')?>
                    <a href="<?php echo URL_ROOT ?>/docs/1.0.0"><?php echo lang('ACME Engine documentation')?></a>.
                </p>

            </div>

        </div>

    </div>

    <br />

    <div id="docs-technologies">
        <h3 class="sub-title"><?php echo lang('Technologies') ?></h3>
        <p><?php echo lang('Your new application contains a lot of cool and powerful technologies:')?></p>
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

    <br />

    <div id="docs-requirements">
        <h3 class="sub-title"><?php echo lang('Requirements') ?></h3>
        <p><?php echo lang('Before installing check if you have all following requirements:')?></p>
        <ul>
            <li>PHP 5.3.5+</li>
            <li>MySQL 5.0+, PostgreSQL 9.0+ or Oracle 10G+</li>
            <li>MySQL, PostgreSQL or Oracle PHP extension</li>
            <li>Apache rewrite engine (for apache webservers)</li>
        </ul>
    </div>

    <br />

    <div id="docs-license">
        <h3 class="sub-title"><?php echo lang('License') ?></h3>
        <p><?php echo lang('ACME Framework is an opensource project developed under MIT LICENSE.')?></p>
    </div>

</div>

<br />
<br />

<div id="docs-overview">

    <h2 class="main-title"><?php echo lang('Overview') ?></h2>

    <p><?php echo lang('ACME Framework is a CodeIgniter powerful smal application with a lot of features ready-to-use like') ?> <strong><?php echo lang('login') ?></strong>, <strong><?php echo lang('users') ?></strong>, <strong><?php echo lang('permissions') ?></strong>, <strong><?php echo lang('menus') ?></strong>, <?php echo lang('a') ?> <strong><?php echo lang('powerful API') ?></strong> <?php echo lang('and') ?> <strong><?php echo lang('more') ?></strong>. <?php echo lang('Just install it on your web server and that is it! Your new application is read to be used by final users. All you have to do as a programmer is to develop all specific features that your application needs.') ?> </p>

    <p><?php echo lang('The new application generated from ACME uses MVC architecture inherited by CodeIgniter, which means that every module inside the application is represented by a controller (and its model and view layers as well).') ?></p>

    <p><?php echo lang('You will be able to create new modules with a special module called') . ' <strong>' . lang('Module Maker') . '</strong>. '. lang('Through this module a new one can be created with all necessary module/controller rules.') ?></p>

    <br />

    <div id="docs-app-flow-chart">

        <h3 class="sub-title"><?php echo lang('Application Flow Chart') ?></h3>

        <p><?php echo lang('The following image illustrates all steps executed on your application from a single request:') ?></p>

        <img src="<?php echo URL_UPLOAD ?>/site-content/app-flow-chart-v-3.0.0.png" class="img-responsive" />

        <br />
        <br />

        <ol>
            <li><?php echo lang('The URL http://appexample/products/do-something is called') ?>.</li>
            <li><?php echo lang('The file') ?> <strong>index.php</strong> <?php echo lang('automatically instantiates the controller') ?> <strong>Products</strong>.</li>
            <li><?php echo lang('The parent constructor from class') ?> <strong>ACME_Controller</strong> <?php echo lang('is called') ?>.</li>
            <li><?php echo lang('The parent constructor from class') ?> <strong>ACME_Core</strong> <?php echo lang('is called') ?>.</li>
            <li><?php echo lang('The parent constructor from class') ?> <strong>CI_Controller</strong> <?php echo lang('is called') ?>.</li>
            <li><?php echo lang('All') ?> <strong>libraries</strong>, <strong>helpers</strong> <?php echo lang('and') ?> <strong><?php echo lang('language files') ?></strong> <?php echo lang('are loaded inside') ?> <strong>ACME_Core</strong>.</li>
            <li><?php echo lang('If the class attribute') ?> <code>$external</code> <?php echo lang('is false then a')?> <strong><?php echo lang('single database connection is loaded')?></strong>, <?php echo lang('the')?> <strong><?php echo lang('user is autenticated')?></strong> <?php echo lang('and') ?> <strong><?php echo lang('module data is loaded from database') ?></strong>.</li>
            <li><?php echo lang('The') ?> <strong><?php echo lang('method') ?></strong> <code>$this->do_something()</code> <?php echo lang('from') ?> <strong>Products</strong> <?php echo lang('class is called and the response is gived to user') ?>.</li>
        </ol>

    </div>

    <br />

    <div id="docs-modules">
        <h3 class="sub-title"><?php echo lang('Modules') ?></h3>
        <p>
            <?php echo lang('Basicly, a module is a controller with properly model and view layers. Every new module created must be extended from controller')?>
            <code>ACME_Controller</code>.
            <?php echo lang('Every controller extended from it will inherit some attributes and a default method')?>
            <code>index()</code>.
            <?php echo lang('See the list of inherited attributes:')?>
        </p>

        <div class="table-responsive">

            <table class="table table-bordered no-footer">

                <thead>
                    <tr>
                        <th style="width: 01%"><?php echo lang('Visibility')?></th>
                        <th style="width: 01%"><?php echo lang('Attribute')?></th>
                        <th style="width: 01%"><?php echo lang('Type')?></th>
                        <th><?php echo lang('Description')?></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="text-bold">public</td>
                        <td><code>$external</code></td>
                        <td>boolean</td>
                        <td>
                            <?php echo lang('Define if module/controller is external or not.') ?>
                            <br />
                            <br />
                            <div class="text-bold"><?php echo lang('TRUE:')?></div>
                            <ol>
                                <li><?php echo lang('Session validation is skipped') ?></li>
                                <li><?php echo lang('Database layer is not loaded') ?></li>
                                <li><?php echo lang('Module/controller is not loaded from database') ?></li>
                            </ol>
                            <br />
                            <div class="text-bold"><?php echo lang('FALSE:')?></div>
                            <ol>
                                <li><?php echo lang('Session is validated') ?></li>
                                <li><?php echo lang('Database layer is loaded') ?></li>
                                <li><?php echo lang('Module/controller is attempted to loaded') ?></li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-bold">public</td>
                        <td><code>$db</code></td>
                        <td>Database Object</td>
                        <td><?php echo lang('A single database connection. Read more about ') ?> <a href="http://www.codeigniter.com/user_guide/database/index.html" target="_blank"><?php echo lang('CodeIgniter database object') ?></a>.</td>
                    </tr>
                    <tr>
                        <td class="text-bold">public</td>
                        <td><code>$id_module</code></td>
                        <td>int</td>
                        <td><?php echo lang('Module id. Used to find current module on database (table acm_module)') ?></td>
                    </tr>
                    <tr>
                        <td class="text-bold">public</td>
                        <td><code>$controller</code></td>
                        <td>string</td>
                        <td><?php echo lang('Module cotroller name. It is also used to find current module on database (table acm_module)') ?></td>
                    </tr>
                    <tr>
                        <td class="text-bold">public</td>
                        <td><code>$table_name</code></td>
                        <td>string</td>
                        <td><?php echo lang('Module table name. Some modules can has a target table so it can build dynamic forms for basic operations (insert, update, delete, view - CRUD) on this table.') ?></td>
                    </tr>
                    <tr>
                        <td class="text-bold">public</td>
                        <td><code>$label</code></td>
                        <td>string</td>
                        <td><?php echo lang('Module label. It can be translated with') ?> <code>lang()</code>.</td>
                    </tr>
                    <tr>
                        <td class="text-bold">public</td>
                        <td><code>$url_img</code></td>
                        <td>string</td>
                        <td><?php echo lang('Module image URL. Usually points to some image placed on img directory, but it can also be a font-awesome font image.') ?></td>
                    </tr>

                    <tr>
                        <td class="text-bold">public</td>
                        <td><code>$description</code></td>
                        <td>string</td>
                        <td><?php echo lang('A brief module description.') ?></td>
                    </tr>

                    <tr>
                        <td class="text-bold">public</td>
                        <td><code>$sql_list</code></td>
                        <td>string</td>
                        <td>
                            <?php echo lang('Module SQL Query. When the') ?>
                            <code>index()</code>
                            <?php echo lang('method is called, this SQL is executed and placed on screen as an HTML table.') ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-bold">public</td>
                        <td><code>$menus</code></td>
                        <td>array()</td>
                        <td>
                            <?php echo lang('Menus of the module. When the') ?>
                            <code>index()</code>
                            <?php echo lang('method is called, this menus are placed on the module header.') ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-bold">public</td>
                        <td><code>$actions</code></td>
                        <td>array()</td>
                        <td>
                            <?php echo lang('SQL query list actions. When the attribute') ?>
                            <code>$this->sql_list</code>
                            <?php echo lang('is executed, for each row is placed all actions of this array.') ?>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

        <p><?php echo message('info', lang('Attention!'), lang('To create a new Module/controller inside ACME Framework') . ' <strong>' . lang('you must') . '</strong> ' . lang('use the') . ' <strong>' . lang('Module Maker') . '</strong> ' . lang('module.')) ?></p>

        <p><?php echo lang('ACME Framework becomes with some modules ready to use. After installed, this modules belongs to the new application. See the modules:')?></p>

        <div class="panel panel-default browser-window">

            <div class="panel-heading circles">
                <div class="circle circle-red"></div>
                <div class="circle circle-yellow"></div>
                <div class="circle circle-green"></div>
            </div>

            <div class="panel-body content">

                <div class="carousel slide" id="carousel-site" data-ride="slide" data-interval="3000">

                    <div class="carousel-inner">

                        <div class="item active"><img src="<?php echo URL_UPLOAD ?>/site-content/app-dashboard.png" class="img-responsive" /></div>

                        <div class="item"><img src="<?php echo URL_UPLOAD ?>/site-content/app-module-manager.png" class="img-responsive" /></div>

                        <div class="item"><img src="<?php echo URL_UPLOAD ?>/site-content/app-settings.png" class="img-responsive" /></div>

                        <div class="item"><img src="<?php echo URL_UPLOAD ?>/site-content/app-logs.png" class="img-responsive" /></div>

                        <div class="item"><img src="<?php echo URL_UPLOAD ?>/site-content/app-menus.png" class="img-responsive" /></div>

                        <div class="item"><img src="<?php echo URL_UPLOAD ?>/site-content/app-users.png" class="img-responsive" /></div>

                        <div class="item"><img src="<?php echo URL_UPLOAD ?>/site-content/app-profile.png" class="img-responsive" /></div>

                        <div class="item"><div><img src="<?php echo URL_UPLOAD ?>/site-content/app-login.png" class="img-responsive" /></div></div>

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

    <br />
    <br />

    <div id="docs-application-menus">
        <h3 class="sub-title"><?php echo lang('Application menus') ?></h3>
        <p>
            <?php echo lang('Your new application has a set of menus and there is a rule about them:')?>
            <strong><?php echo lang('all menus are arranged by user group')?></strong>.
            <?php echo lang('This means, for example, that all users of a particular group will see the same application menus.')?>
        </p>
        <p><?php echo lang('If the ROOT group has five registered menus, then all those menus will appear for all ROOT users. The same happens for the other groups.')?></p>
        <p><?php echo lang('Lets suppose you create a group called ADMIN and then you create three menus for this group. All users from this group will see only these three registered menus.')?></p>
    </div>

    <br />

    <div id="docs-permissions">
        <h3 class="sub-title"><?php echo lang('Permissions') ?></h3>
        <p>
            <?php echo lang('Permissions are used to check if an user is allowed to do some action or not. And here is one more important rule about it:')?>
            <strong><?php echo lang('permissions are arranged by module and user')?></strong>.
            <?php echo lang('This means that every module has a set of its own permissions and these permissions can be applied for each user.') ?>
        </p>
        <p><?php echo lang('Create and apply a new permission is very easy. See the following steps:') ?></p>
        <ol>
            <li><?php echo lang('Go to module Administration, located on menu')?> <strong><?php echo lang('System > Modules > Administration') ?></strong></li>
            <li><?php echo lang('Click on desired module and create a new permission on the bottom of page')?></li>
            <li><?php echo lang('Go to module Users, located on menu')?> <strong><?php echo lang('System > Users') ?></strong></li>
            <li><?php echo lang('Select desired user and click on the button')?> <strong><?php echo lang('Permissions')?></strong></li>
            <li><?php echo lang('A list of all modules and its permissions must appear. Just look for recently added permission and check it. From now on the selected user is able to do whathever this permission represents')?></li>
            <li>
                <?php echo lang('Add')?>
                <code>$this->validate_permission('<?php echo lang('YOUR_PERMISSION_NAME')?>')</code>
                <?php echo lang('on every part of code you want to check if user has this permission or not. If the user does not has this permission then an error permission page will appear.') ?>
            </li>
        </ol>
    </div>

    <br />

    <div id="docs-templates">

        <h3 class="sub-title"><?php echo lang('Templates') ?></h3>

        <p><?php echo lang('ACME Framework and your new application is built based on templates. Every template is placed on') ?> <strong>application/views</strong>. <?php echo lang('By default, it has')?> <strong><?php echo lang('3 different template styles') ?></strong> <?php echo lang('and everything you need to do to change the current template is update your') ?> <strong><?php echo lang('config/ENVIRONMENT/app_settings.php') ?></strong> <?php echo lang('file, changing value of index') ?> <code>$config['TEMPLATE']</code>. <?php echo lang('The available templates are:') ?></p>

        <div class="table-responsive">

            <table class="table table-hover table-bordered no-footer">

                <thead>
                    <tr>
                        <th style="width: 01%"><?php echo lang('Name')?></th>
                        <th><?php echo lang('Description')?></th>
                        <th><?php echo lang('Reference')?></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><code>adminlte</code></td>
                        <td><?php echo lang('AdminLTE template. Based on original Almaseed AdminLTE template.') ?></td>
                        <td><a href="https://almsaeedstudio.com/AdminLTE" target="_blank">https://almsaeedstudio.com/AdminLTE</a></td>
                    </tr>
                    <tr>
                        <td><code>bootflat</code></td>
                        <td><span class="label label-success"><?php echo lang('Default') ?></span> <?php echo lang('application template. Based on original Bootflat UI kit.') ?></td>
                        <td><a href="http://bootflat.github.io/" target="_blank">http://bootflat.github.io/</a></td>
                    </tr>
                    <tr>
                        <td><code>google</code></td>
                        <td><?php echo lang('TODC Google bootstrap template. It is based on original TODC Google Bootstrap UI kit.') ?></td>
                        <td><a href="http://todc.github.io/todc-bootstrap/" target="_blank">http://todc.github.io/todc-bootstrap/</a></td>
                    </tr>
                    <tr>
                        <td><code>material</code></td>
                        <td><?php echo lang('Material Design template. It is based on original Material Design UI kit.') ?></td>
                        <td><a href="https://github.com/FezVrasta/bootstrap-material-design" target="_blank">https://github.com/FezVrasta/bootstrap-material-design</a></td>
                    </tr>
                </tbody>

            </table>

        </div>

        <div class="panel panel-default browser-window">

            <div class="panel-heading circles">
                <div class="circle circle-red"></div>
                <div class="circle circle-yellow"></div>
                <div class="circle circle-green"></div>
            </div>

            <div class="panel-body content">

                <div class="carousel slide" id="carousel-templates" data-ride="slide" data-interval="3000">

                    <div class="carousel-inner">

                        <div class="item active"><img src="<?php echo URL_UPLOAD ?>/site-content/app-template-adminlte.png" class="img-responsive" /></div>

                        <div class="item"><img src="<?php echo URL_UPLOAD ?>/site-content/app-template-bootflat.png" class="img-responsive" /></div>

                        <div class="item"><img src="<?php echo URL_UPLOAD ?>/site-content/app-template-google-bootstrap.png" class="img-responsive" /></div>

                        <div class="item"><img src="<?php echo URL_UPLOAD ?>/site-content/app-template-material.png" class="img-responsive" /></div>

                    </div>

                    <a class="left carousel-control" href="#carousel-templates" role="button" data-slide="prev">
                        <span class="fa-stack fa-1x">
                          <i class="fa fa-circle-thin fa-stack-2x"></i>
                          <i class="fa fa-arrow-left fa-stack-1x"></i>
                        </span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="right carousel-control" href="#carousel-templates" role="button" data-slide="next">
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

<br />
<br />

<div id="docs-constants">

    <h2 class="main-title"><?php echo lang('PHP constants and session') ?></h2>

    <p><?php echo lang('ACME Framework has some pre-defined constants that are available on new application. See these constants below:') ?></p>

    <div class="table-responsive">

        <table class="table table-hover table-bordered no-footer">

            <thead>
                <tr>
                    <th style="width: 01%"><?php echo lang('Name')?></th>
                    <th style="width: 01%"><?php echo lang('Use on JQuery')?></th>
                    <th><?php echo lang('Description')?></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><code>ACME_VERSION</code></td>
                    <td>-</td>
                    <td><?php echo lang('Current framework version.') ?></td>
                </tr>
                <tr>
                    <td><code>APP_NAME</code></td>
                    <td><code>$('#APP_NAME').val()</code></td>
                    <td><?php echo lang('Defines the application name.') ?></td>
                </tr>
                <tr>
                    <td><code>ENVIRONMENT</code></td>
                    <td><code>$('#ENVIRONMENT').val()</code></td>
                    <td><?php echo lang('Current application environment (development / production).') ?></td>
                </tr>
                <tr>
                    <td><code>DB_DRIVER</code></td>
                    <td>-</td>
                    <td><?php echo lang('Database driver (mysql / postgre / oci8).') ?></td>
                </tr>
                <tr>
                    <td><code>LANGUAGE</code></td>
                    <td><code>$('#LANGUAGE').val()</code></td>
                    <td><?php echo lang('Current application language (en_US, pt_BR).') ?></td>
                </tr>
                <tr>
                    <td><code>TEMPLATE</code></td>
                    <td><code>$('#TEMPLATE').val()</code></td>
                    <td><?php echo lang('Application template name.') ?></td>
                </tr>
                <tr>
                    <td><code>EMAIL_FROM</code></td>
                    <td><code>$('#EMAIL_FROM').val()</code></td>
                    <td><?php echo lang('Used to send emails inside application.') ?></td>
                </tr>
                <tr>
                    <td><code>URL_ROOT</code></td>
                    <td><code>$('#URL_ROOT').val()</code></td>
                    <td><?php echo lang('Application / project root URL.') ?></td>
                </tr>
                <tr>
                    <td><code>URL_UPLOAD</code></td>
                    <td><code>$('#URL_UPLOAD').val()</code></td>
                    <td><?php echo lang('Application uploads URL.') ?></td>
                </tr>
                <tr>
                    <td><code>URL_TEMPLATE</code></td>
                    <td><code>$('#URL_TEMPLATE').val()</code></td>
                    <td><?php echo lang('URL that points to the current template.') ?></td>
                </tr>
                <tr>
                    <td><code>URL_ASSETS</code></td>
                    <td><code>$('#URL_ASSETS').val()</code></td>
                    <td><?php echo lang('URL that points to assets folder.') ?></td>
                </tr>
                <tr>
                    <td><code>URL_CSS</code></td>
                    <td><code>$('#URL_CSS').val()</code></td>
                    <td><?php echo lang('URL that points to css folder, inside the current template.') ?></td>
                </tr>
                <tr>
                    <td><code>URL_IMG</code></td>
                    <td><code>$('#URL_IMG').val()</code></td>
                    <td><?php echo lang('URL that points to img folder, inside the current template.') ?></td>
                </tr>
                <tr>
                    <td><code>URL_JS</code></td>
                    <td><code>$('#URL_JS').val()</code></td>
                    <td><?php echo lang('URL that points to js folder, inside the current template.') ?></td>
                </tr>
                <tr>
                    <td><code>PATH_TEMP</code></td>
                    <td><code>$('#PATH_TEMP').val()</code></td>
                    <td><?php echo lang('Relative path that points to temp folder.') ?></td>
                </tr>
                <tr>
                    <td><code>PATH_UPLOAD</code></td>
                    <td><code>$('#PATH_UPLOAD').val()</code></td>
                    <td><?php echo lang('Relative path that points to uploads folder.') ?></td>
                </tr>
                <tr>
                    <td><code>PATH_ASSETS</code></td>
                    <td><code>$('#PATH_ASSETS').val()</code></td>
                    <td><?php echo lang('Relative path that points to assets folder.') ?></td>
                </tr>
                <tr>
                    <td><code>PATH_CSS</code></td>
                    <td><code>$('#PATH_CSS').val()</code></td>
                    <td><?php echo lang('Relative path that points to css folder, inside the current template.') ?></td>
                </tr>
                <tr>
                    <td><code>PATH_IMG</code></td>
                    <td><code>$('#PATH_IMG').val()</code></td>
                    <td><?php echo lang('Relative path that points to img folder, inside the current template.') ?></td>
                </tr>
                <tr>
                    <td><code>PATH_JS</code></td>
                    <td><code>$('#PATH_JS').val()</code></td>
                    <td><?php echo lang('Relative path that points to js folder, inside the current template.') ?></td>
                </tr>
                <tr>
                    <td><code>PATH_HTML_COMPONENTS</code></td>
                    <td><code>$('#PATH_HTML_COMPONENTS').val()</code></td>
                    <td><?php echo lang('Relative path that points to html_components folder, inside the current template.') ?></td>
                </tr>
            </tbody>

        </table>

    </div>

    <p><?php echo lang('ACME Framework has also some session variables that are available after installation:') ?></p>

    <div class="table-responsive">

        <table class="table table-hover table-bordered no-footer">

            <thead>
                <tr>
                    <th style="width: 01%"><?php echo lang('Name')?></th>
                    <th><?php echo lang('Description')?></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><code class="text-unbroken">$this->session->userdata('id_user')</code></td>
                    <td><?php echo lang('ID of current logged user.') ?></td>
                </tr>
                <tr>
                    <td><code class="text-unbroken">$this->session->userdata('url_default')</code></td>
                    <td><?php echo lang('URL that points to default page of current logged user.') ?></td>
                </tr>
                <tr>
                    <td><code class="text-unbroken">$this->session->userdata('user_name')</code></td>
                    <td><?php echo lang('Name of current logged user.') ?></td>
                </tr>
                <tr>
                    <td><code class="text-unbroken">$this->session->userdata('email')</code></td>
                    <td><?php echo lang('Email of current logged user.') ?></td>
                </tr>
                <tr>
                    <td><code class="text-unbroken">$this->session->userdata('user_group')</code></td>
                    <td><?php echo lang('Group name of current logged user.') ?></td>
                </tr>
                <tr>
                    <td><code class="text-unbroken">$this->session->userdata('language')</code></td>
                    <td><?php echo lang('Language the application will appear for current logged user.') ?></td>
                </tr>
            </tbody>

        </table>

    </div>

</div>

<br />
<br />

<div id="docs-database">

    <h2 class="main-title"><?php echo lang('Database') ?></h2>

    <p><?php echo lang('ACME Framework has a ready-to-use database layer, a set of available tables for the new application after the installation. These tables are responsible to keep data of some application features like user information, modules or even application logs. See the following list of available tables after installation:') ?></p>

    <div class="table-responsive">

        <table class="table table-hover table-bordered no-footer">

            <thead>
                <tr>
                    <th style="width: 01%"><?php echo lang('Table')?></th>
                    <th><?php echo lang('Description')?></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><strong>acm_log</strong></td>
                    <td><?php echo lang('Stores all application logs.') ?></td>
                </tr>
                <tr>
                    <td><strong>acm_log_error</strong></td>
                    <td><?php echo lang('Stores all application error logs.') ?></td>
                </tr>
                <tr>
                    <td><strong>acm_menu</strong></td>
                    <td><?php echo lang('Stores all application menus. When a new menu is created for a user group on module Menus the data comes to here.') ?></td>
                </tr>
                <tr>
                    <td><strong>acm_module</strong></td>
                    <td><?php echo lang('Stores all application modules. When a new module is created with Module Maker the data comes to this table.') ?></td>
                </tr>
                <tr>
                    <td><strong>acm_module_action</strong></td>
                    <td>
                        <?php echo lang('Stores all actions from a module. An action is a link placed on every row resulted by the execution of the module attribute') ?>
                        <code>$this->sql_list</code>.
                    </td>
                </tr>
                <tr>
                    <td><strong>acm_module_form</strong></td>
                    <td><?php echo lang('Stores all module forms. When an automatic form is created (for CRUD operations) this data is placed here.') ?></td>
                </tr>
                <tr>
                    <td><strong>acm_module_form_field</strong></td>
                    <td><?php echo lang('Stores all module form fields. A field is a representation of a column from a table and belongs to a specific form (table acm_module_form).') ?></td>
                </tr>
                <tr>
                    <td><strong>acm_module_menu</strong></td>
                    <td><?php echo lang('Stores all module menus or links that are placed on top of module.') ?></td>
                </tr>
                <tr>
                    <td><strong>acm_module_permission</strong></td>
                    <td><?php echo lang('Stores all module permissions. When a permission is created on module Administration, the data comes to here.') ?></td>
                </tr>
                <tr>
                    <td><strong>acm_user</strong></td>
                    <td><?php echo lang('Stores all users from application. When a new user is created then the data is stored here.') ?></td>
                </tr>
                <tr>
                    <td><strong>acm_user_config</strong></td>
                    <td><?php echo lang('Stores specific user information. Information like user language or user default URL is placed here.') ?></td>
                </tr>
                <tr>
                    <td><strong>acm_user_group</strong></td>
                    <td><?php echo lang('Stores all user groups from application. When a new user group is created the content comes to this table.') ?></td>
                </tr>
                <tr>
                    <td><strong>acm_user_permission</strong></td>
                    <td><?php echo lang('Store all user permissions. When a permission is applied to an user on module Users then this information comes to this table.') ?></td>
                </tr>
            </tbody>

        </table>

    </div>

</div>

<br />
<br />

<div id="docs-libraries-and-helpers">

    <h2 class="main-title"><?php echo lang('Helpers') ?></h2>

    <p>
        <?php echo lang('There are some global helpers functions available in every Controller class extended from')?>
        <code>ACME_Controller</code>.
        <?php echo lang('All those helpers functions') ?>
        <strong class="text-success">
        <?php echo lang('are automatically loaded') ?>
        </strong>
        <?php echo lang('so you do not have to worry about that. The following list shows which helpers are automatically loaded:')?>
    </p>

    <div class="table-responsive">

        <table class="table table-hover table-bordered no-footer">

            <thead>
                <tr>
                    <th><?php echo lang('Name')?></th>
                    <th><?php echo lang('Equivalent library')?></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><strong>Helper Access</strong></td>
                    <td>Access</td>
                </tr>
                <tr>
                    <td><strong>Helper Array</strong></td>
                    <td></td>
                </tr>
                <tr>
                    <td><strong>Helper Error</strong></td>
                    <td>Error</td>
                </tr>
                <tr>
                    <td><strong>Helper Form</strong></td>
                    <td>Form</td>
                </tr>
                <tr>
                    <td><strong>Helper Language</strong></td>
                    <td></td>
                </tr>
                <tr>
                    <td><strong>Helper Logger</strong></td>
                    <td>Logger</td>
                </tr>
                <tr>
                    <td><strong>Helper Tag</strong></td>
                    <td>Tag</td>
                </tr>
                <tr>
                    <td><strong>Helper Template</strong></td>
                    <td>Template</td>
                </tr>
                <tr>
                    <td><strong>Helper Validation</strong></td>
                    <td>Validation</td>
                </tr>
            </tbody>

        </table>

    </div>

    <?php echo message('warning',
                        lang('Important!'),
                        '<br /><br />' .
                        lang('You may have noticed that some helpers have an equivalent library. This happens because almost loaded helper functions work as aliases for methods of same name in respective library. For example:') .
                        '<br /><br />' .
                        lang('Function') .
                        ' <code>validate_session()</code> ' .
                        lang('loaded by helper Access is equivalent to:') .
                        '<br /><br />' .
                        lang('Method') .
                        ' <code>$this->access->validate_session()</code> ' .
                        lang('available on library Access.')
                        )?>

    <br />

    <div id="docs-access-helper">

        <h3 class="sub-title">
            <?php echo lang('Access helper') ?>
            <small class="text-success">// <?php echo lang('automatically loaded')?></small>
        </h3>

        <p><?php echo lang('Gathers methods related with the application access.')?></p>

        <div class="box-code">
            <h4><code class="function">validate_session ()</code></h4>
            <p><?php echo lang('Validates the session. Returns true if user is logged or redirect to login page if it does not.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">check_session ()</code></h4>
            <p><?php echo lang('Validates the session. Returns true true or false if user is logged or not.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">validate_permission (string $controller, string $permission, int $id_user)</code></h4>
            <p><?php echo lang('Verifies a single permission for the forwarded module and user. Returns true if user has this permission, or load an error permission page if user has not.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">check_permission (string $controller, string $permission, int $id_user)</code></h4>
            <p><?php echo lang('Verifies a single permission for the forwarded module and user. Returns true or false if user has this permission or not.')?></p>
        </div>

    </div>

    <br />

    <div id="docs-array-helper">

        <h3 class="sub-title">
            <?php echo lang('Array helper') ?>
            <small class="text-success">// <?php echo lang('automatically loaded')?></small>
        </h3>

        <p><?php echo lang('Gathers functions related with arrays and array manipulation.')?></p>

        <div class="box-code">
            <h4><code class="function">get_value (array $data, string $index)</code></h4>
            <p><?php echo lang('Returns an array value even index exist or not. If the index does not exist then this function returns an empty string.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">array_change_key_case_recursive (array $array, constant $case) </code></h4>
            <p>
                <?php echo lang('This function is the same of ')?>
                <code>array_change_key_case()</code>
                <?php echo lang('except this does not care if the array is multidimensional or not.')?>
            </p>
        </div>

    </div>

    <br />

    <div id="docs-error-helper">

        <h3 class="sub-title">
            <?php echo lang('Error helper') ?>
            <small class="text-success">// <?php echo lang('automatically loaded')?></small>
        </h3>

        <p><?php echo lang('Gathers functions related with application error handling.')?></p>

        <div class="box-code">
            <h4><code class="function">show_error_ (string $header, string $message, string $template, int $status_code, bool $log_error)</code></h4>
            <p><?php echo lang('Shows a generic error page according with the forwarded parameters.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">show_php_error (string $severity, string $message, string $filepath, int $line, bool $log_error)</code></h4>
            <p><?php echo lang('Shows a HTML box containing a PHP error. The page proccess is not interrupted.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">show_exception_page (string $message)</code></h4>
            <p><?php echo lang('Shows an exception page containing the forwarded message.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">show_404_ ()</code></h4>
            <p><?php echo lang('Shows a 404 error page.')?></p>
        </div>

    </div>

    <br />

    <div id="docs-form-helper">

        <h3 class="sub-title">
            <?php echo lang('Form helper') ?>
            <small class="text-success">// <?php echo lang('automatically loaded')?></small>
        </h3>

        <p><?php echo lang('Gathers functions related with application HTML forms.')?></p>

        <div class="box-code">
            <h4><code class="function">build_select_options (array $data, string $option_selected, bool $blank_option)</code></h4>
            <p>
                <?php echo lang('Builds a set of HTML tags')?>
                <code>&lt;option&gt;</code>
                <?php echo lang('from a resultset array. This array must has two indexes, the first one is value will be placed on value attribute and the second one must be the label will be placed on option.')?>
            </p>
        </div>

    </div>

    <br />

    <div id="docs-language-helper">

        <h3 class="sub-title">
            <?php echo lang('Language helper') ?>
            <small class="text-success">// <?php echo lang('automatically loaded')?></small>
        </h3>

        <p><?php echo lang('Gathers functions related with application languages.')?></p>

        <div class="box-code">
            <h4><code class="function">lang (string $key)</code></h4>
            <p>
                <?php echo lang('Translates an index located on array $lang inside of file application/language/')?>
                <code>LANGUAGE</code>
                <?php echo lang('/app_lang.php. If the key does not have a translation then this function returns the key.')?>
            </p>
        </div>

    </div>

    <br />

    <div id="docs-log-helper">

        <h3 class="sub-title">
            <?php echo lang('Logger helper') ?>
            <small class="text-success">// <?php echo lang('automatically loaded')?></small>
        </h3>

        <p><?php echo lang('Gathers functions related with application logs and error logs.')?></p>

        <div class="box-code">
            <h4><code class="function">db_log (string $text_log, string $action, string $table, array $additional_data)</code></h4>
            <p><?php echo lang('Saves a log on database (table acm_log).')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">log_error (string $error_type, string $header, string $message, int $status_code)</code></h4>
            <p><?php echo lang('Saves an error log on database (table acm_log_error).')?></p>
        </div>

    </div>

    <br />

    <div id="docs-tag-helper">

        <h3 class="sub-title">
            <?php echo lang('Tag helper') ?>
            <small class="text-success">// <?php echo lang('automatically loaded')?></small>
        </h3>

        <p><?php echo lang('Gathers functions related with application tags.')?></p>

        <?php echo message('warning', lang('Hint:'), lang('An app tag is every tag as') . ' <code>{URL_ROOT}</code> ' . lang('or') . ' <code>{URL_IMG}</code> ' . lang('inside a text. You can replace this tags by the corresponding value, in this case') . ' <code>URL_ROOT</code> ' . lang('and') . ' <code>URL_IMG</code> ' . lang('constant values.') ) ?>

        <div class="box-code">
            <h4><code class="function">tag_replace (string $string)</code></h4>
            <p><?php echo lang('Replaces all tag ocurrences by their respective values inside a string.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">array_tag_replace (string $value, array $arr_data)</code></h4>
            <p>
                <?php echo lang('Replaces an specific tag as')?>
                <code>{<?php echo lang('NUMBER OR COLUMN_NAME')?>}</code>
                <?php echo lang('by the equivalent value inside an array.')?>
            </p>
        </div>

    </div>

    <br />

    <div id="docs-template-helper">

        <h3 class="sub-title">
            <?php echo lang('Template helper') ?>
            <small class="text-success">// <?php echo lang('automatically loaded')?></small>
        </h3>

        <p><?php echo lang('Gathers functions related with application template.')?></p>

        <div class="box-code">
            <h4><code class="function">message (string $type, string $title, string $description, bool $close, string $style)</code></h4>
            <p><?php echo lang('Returns the HTML of a message according with forwarded parameters.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">image (string $url_img)</code></h4>
            <p><?php echo lang('Returns the HTML component image, which is responsible for building an img tag, also checking if the given value is a font-awesome icon.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">app_settings_inputs ()</code></h4>
            <p><?php echo lang('Returns a set of HTML hidden inputs, each one for each app setting as APP_NAME, TEMPLATE, etc.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">load_html_component (string $component, array $params)</code></h4>
            <p>
                <?php echo lang('Loads a HTML component, located at application/views/')?>
                <code>TEMPLATE</code>
                <?php echo lang('/html-components/')?>
                <code>$component</code>/<code>$component</code>.php.
                <?php echo lang('The second parameter is all variables must be available inside this component.')?>
            </p>
        </div>

        <div class="box-code">
            <h4><code class="function">load_js_file (string $file)</code></h4>
            <p>
                <?php echo lang('Returns the HTML of tag')?>
                <code>&lt;script src="$file"&gt;</code>
                <?php echo lang('according the forwarded file. It is necessary only the file name.')?>
            </p>
        </div>

        <div class="box-code">
            <h4><code class="function">load_css_file (string $file)</code></h4>
            <p>
                <?php echo lang('Returns the HTML of tag')?>
                <code>&lt;link href="$file"&gt;</code>
                <?php echo lang('according the forwarded file. It is necessary only the file name.')?>
            </p>
        </div>

    </div>

    <br />

    <div id="docs-validation-helper">

        <h3 class="sub-title">
            <?php echo lang('Validation helper') ?>
            <small class="text-success">// <?php echo lang('automatically loaded')?></small>
        </h3>

        <p><?php echo lang('Gathers functions related with validations.')?></p>

        <div class="box-code">
            <h4><code class="function">is_date_format (string $value)</code></h4>
            <p><?php echo lang('Checks if the given value is on format DD/MM/YYYY.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">is_date_format_db (string $value)</code></h4>
            <p><?php echo lang('Checks if the given value is on format YYYY-MM-DD.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">is_class_name (string $name)</code></h4>
            <p><?php echo lang('Checks if the given value is a valid class name.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">is_variable_name (string $name)</code></h4>
            <p><?php echo lang('Checks if the given value is a valid variable name.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">is_double_ (string $number)</code></h4>
            <p><?php echo lang('Checks if the given value is a valid double.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">is_float_ (string $number)</code></h4>
            <p><?php echo lang('Checks if the given value is a valid float.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">is_currency (string $number)</code></h4>
            <p><?php echo lang('Checks if the given value is a valid currency value.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">is_integer_ (string  $number)</code></h4>
            <p><?php echo lang('Checks if the given value is a valid integer.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">is_alfa (string $word)</code></h4>
            <p><?php echo lang('Checks if the given value is a valid alfa numeric value.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">is_letter (string $word)</code></h4>
            <p><?php echo lang('Checks if the given value is only letters value.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">is_equal (mixed $value_one, mixed $value_two)</code></h4>
            <p><?php echo lang('Checks if the given parameters match.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">is_email (string $email)</code></h4>
            <p><?php echo lang('Checks if the given value is a valid email.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">is_ip_v4 (string $ip)</code></h4>
            <p><?php echo lang('Checks if the given value is a valid ip v4 address.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">is_roman (string $number)</code></h4>
            <p><?php echo lang('Checks if the given value is a valid roman number.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">is_empty (mixed $value)</code></h4>
            <p><?php echo lang('Checks if the given value is empty even if was an empty string.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">length (string $value, int $ini, int $end)</code></h4>
            <p>
                <?php echo lang('Checks if the given value length is between') ?>
                <code>$ini</code>
                <?php echo lang('and')?>
                <code>$end</code>.
            </p>
        </div>

        <div class="box-code">
            <h4><code class="function">min_length (int $value, int $length)</code></h4>
            <p>
                <?php echo lang('Checks if the given value length is until') ?>
                <code>$length</code>.
            </p>
        </div>

        <div class="box-code">
            <h4><code class="function">max_length (int $value, int $length)</code></h4>
            <p>
                <?php echo lang('Checks if the given value length is more than') ?>
                <code>$length</code>.
            </p>
        </div>

        <div class="box-code">
            <h4><code class="function">between (int $number, int $ini, int $end)</code></h4>
            <p>
                <?php echo lang('Checks if the given value is between') ?>
                <code>$ini</code>
                <?php echo lang('and')?>
                <code>$end</code>.
            </p>
        </div>

        <div class="box-code">
            <h4><code class="function">is_hexa (string $hexa)</code></h4>
            <p><?php echo lang('Checks if the given value is a hexadecimal.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">is_special_char (string $word)</code></h4>
            <p><?php echo lang('Checks if the given value is only special chars.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">is_hexa_color (string $hexa)</code></h4>
            <p><?php echo lang('Checks if the given value is a valid hexadecimal color.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">is_cpf (string $cpf)</code></h4>
            <p><?php echo lang('Checks if the given value is a valid cpf number.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">is_cnpj (string $cnpj)</code></h4>
            <p><?php echo lang('Checks if the given value is a valid cnpj number.')?></p>
        </div>

        <div class="box-code">
            <h4><code class="function">is_ssn (string $ssn)</code></h4>
            <p><?php echo lang('Checks if the given value is a valid ssn number.')?></p>
        </div>

    </div>

</div>

<br />

<div id="docs-libraries">

    <h2 class="main-title"><?php echo lang('Libraries') ?></h2>

    <p>
        <?php echo lang('There are also some libraries available on every Controller class extended from')?>
        <code>ACME_Controller</code>.
        <?php echo lang('All those libraries') ?>
        <strong class="text-success">
        <?php echo lang('are automatically loaded') ?>
        </strong>
        <?php echo lang('so you do not have to worry about mannually load them. The following list shows which libraries are available:')?>
    </p>

    <div class="table-responsive">

        <table class="table table-hover table-bordered no-footer">

            <thead>
                <tr>
                    <th><?php echo lang('Name')?></th>
                    <th><?php echo lang('Available as')?></th>
                </tr>
            </thead>

            <tbody>
                 <tr>
                    <td><strong>Library Access</strong></td>
                    <td><code>$this->access</code></td>
                </tr>
                <tr>
                    <td><strong>Library Array_Table</strong></td>
                    <td><code>$this->array_table</code></td>
                </tr>
                <tr>
                    <td><strong>Library Error</strong></td>
                    <td><code>$this->error</code></td>
                </tr>
                <tr>
                    <td><strong>Library Form</strong></td>
                    <td><code>$this->form</code></td>
                </tr>
                <tr>
                    <td><strong>Library Logger</strong></td>
                    <td><code>$this->logger</code></td>
                </tr>
                <tr>
                    <td><strong>Library Tag</strong></td>
                    <td><code>$this->tag</code></td>
                </tr>
                <tr>
                    <td><strong>Library Template</strong></td>
                    <td><code>$this->template</code></td>
                </tr>
                <tr>
                    <td><strong>Library Validation</strong></td>
                    <td><code>$this->validation</code></td>
                </tr>
            </tbody>

        </table>

    </div>

    <?php echo message('warning', lang('Important!'),
                        lang('Pay attention on icon') .
                        ' <a href="javascript:void(0)" style="font-size: 18px"><i class="fa fa-fw fa-exchange"></i></a>. ' .
                        lang('If it appear on a library method it means that this method has an equivalent helper function.')
                        )?>

    <br />

    <div id="docs-access-library">

        <h3 class="sub-title">
            <?php echo lang('Access library') ?>
            <small><code class="text-muted">$this->access</code></small>
        </h3>

        <p><?php echo lang('Gathers methods related with the application access.')?></p>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">validate_login (string $email, string $password)</span>
                </code>
            </h4>
            <p><?php echo lang('Validates an application login. Expect an email and password and returns the user data in case of true, or boolean in case of false.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">validate_session ()</span>
                </code>
                <div class="hide">validate_session ()</div>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-exchange"></i></a>
            </h4>
            <p><?php echo lang('Validates the session. Returns true if user is logged or redirect to login page if it does not.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">check_session ()</span>
                </code>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-exchange"></i></a>
            </h4>
            <p><?php echo lang('Validates the session. Returns true true or false if user is logged or not.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">validate_permission (string $controller, string $permission, int $id_user)</span>
                </code>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-exchange"></i></a>
            </h4>
            <p><?php echo lang('Verifies a single permission for the forwarded module and user. Returns true if user has this permission, or load an error permission page if user has not.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">check_permission (string $controller, string $permission, int $id_user)</span>
                </code>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-exchange"></i></a>
            </h4>
            <p><?php echo lang('Verifies a single permission for the forwarded module and user. Returns true or false if user has this permission or not.')?></p>
        </div>

    </div>

    <br />

    <div id="docs-array-table-library">

        <h3 class="sub-title">
            <?php echo lang('Array_Table library') ?>
            <small><code class="text-muted">$this->array_table</code></small>
        </h3>

        <p>
            <?php echo lang('Gathers methods related with HTML tables. The objective of this library is build an HTML table from an array.')?>
            <?php echo lang('This library operates using singleton, so one instance can be get by the call')?>
            <code>$this->array_table->get_instance()</code>.
        </p>
        <p><?php echo lang('There are some attributes in every object of this library got by singleton:')?></p>

        <div class="table-responsive">

            <table class="table table-hover table-bordered no-footer">

                <thead>
                    <tr>
                        <th style="width: 01%"><?php echo lang('Attribute')?></th>
                        <th style="width: 01%"><?php echo lang('Type')?></th>
                        <th><?php echo lang('Description')?></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><code>public $data</code></td>
                        <td>array()</td>
                        <td><?php echo lang('Resultset data that will be transformed on HTML table rows.') ?></td>
                    </tr>
                    <tr>
                        <td><code>public $html</code></td>
                        <td>string</td>
                        <td><?php echo lang('After process resultset data this attribute is filled with table HTML.') ?></td>
                    </tr>
                    <tr>
                        <td><code>public $id</code></td>
                        <td>string</td>
                        <td><?php echo lang('HTML id attribute for proccessed table.') ?></td>
                    </tr>
                    <tr>
                        <td><code>public $class</code></td>
                        <td>string</td>
                        <td><?php echo lang('HTML class attribute for proccessed table.') ?></td>
                    </tr>
                    <tr>
                        <td><code>public $columns</code></td>
                        <td>array()</td>
                        <td><?php echo lang('An array that defines all columns that must be shown. Each value of this array define a visible column.') ?></td>
                    </tr>
                    <tr>
                        <td><code>public $columns_before</code></td>
                        <td>array()</td>
                        <td>
                            <?php echo lang('An array of columns values that will be placed on each row before columns contained in attribute') ?>
                            <code>$data</code>.
                        </td>
                    </tr>
                    <tr>
                        <td><code>public $columns_after</code></td>
                        <td>array()</td>
                        <td>
                            <?php echo lang('An array of columns values that will be placed on each row after columns contained in attribute') ?>
                            <code>$data</code>.
                        </td>
                    </tr>
                </tbody>

            </table>

        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">get_instance ()</span>
                </code>
            </h4>
            <p><?php echo lang('Returns an instance of this class.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">set_data (array $data)</span>
                </code>
            </h4>
            <p><?php echo lang('Sets the array data of table.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">get_data ()</span>
                </code>
            </h4>
            <p><?php echo lang('Gets the array data of table.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">set_columns (array $columns)</span>
                </code>
            </h4>
            <p><?php echo lang('Sets columns of table - columns will be show.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">get_columns ()</span>
                </code>
            </h4>
            <p><?php echo lang('Returns all table columns.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">empty_columns ()</span>
                </code>
            </h4>
            <p><?php echo lang('Clears all table columns.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">set_id (string $id)</span>
                </code>
            </h4>
            <p><?php echo lang('Sets the HTML id attribute of table.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">get_id ()</span>
                </code>
            </h4>
            <p><?php echo lang('Gets the HTML id attribute of table.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">set_class (string $class)</span>
                </code>
            </h4>
            <p><?php echo lang('Sets the HTML class attribute of table.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">get_class ()</span>
                </code>
            </h4>
            <p><?php echo lang('Gets the HTML class attribute of table.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">add_column (string $content, bool $before)</span>
                </code>
            </h4>
            <p><?php echo lang('Adds a column value for each table row before or after selected columns.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">proccess ()</span>
                </code>
            </h4>
            <p><?php echo lang('Processes table data. Call the HTML component generic table, which is really responsible to process this table.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">get_html ()</span>
                </code>
            </h4>
            <p><?php echo lang('Gets HTML table from current table.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">render ()</span>
                </code>
            </h4>
            <p><?php echo lang('Renders HTML table from current table.')?></p>
        </div>

    </div>

    <br />

    <div id="docs-error-library">

        <h3 class="sub-title">
            <?php echo lang('Error library') ?>
            <small><code class="text-muted">$this->error</code></small>
        </h3>

        <p><?php echo lang('Gathers methods related with the application error handling.')?></p>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">show_error (string $header, string $message, string $template, int $status_code, bool $log_error)</span>
                </code>
                <div class="hide">show_error_ (string $header, string $message, string $template, int $status_code, bool $log_error)</div>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-exchange"></i></a>
            </h4>
            <p><?php echo lang('Shows a generic error page according with the forwarded parameters.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">show_php_error (string $severity, string $message, string $filepath, int $line, bool $log_error)</span>
                </code>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-exchange"></i></a>
            </h4>
            <p><?php echo lang('Shows a HTML box containing a PHP error. The page proccess is not interrupted.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">show_exception_page (string $message)</span>
                </code>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-exchange"></i></a>
            </h4>
            <p><?php echo lang('Shows an exception page containing the forwarded message.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">show_404 ()</span>
                </code>
                <div class="hide">show_404_ ()</div>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-exchange"></i></a>
            </h4>
            <p><?php echo lang('Shows a 404 error page.')?></p>
        </div>

    </div>

    <br />

    <div id="docs-form-library">

        <h3 class="sub-title">
            <?php echo lang('Form library') ?>
            <small><code class="text-muted">$this->form</code></small>
        </h3>

        <p><?php echo lang('Gathers methods related with the application html forms.')?></p>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">build_form_fields (array $fields, array $values)</span>
                </code>
            </h4>
            <p><?php echo lang('Receives a resultset of inputs (from table acm_module_form_field) and transforms them into an array of html input elements.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">build_select_options (array $data, string $option_selected, bool $blank_option)</span>
                </code>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-exchange"></i></a>
            </h4>
            <p>
                <?php echo lang('Builds a set of HTML tags')?>
                <code>&lt;option&gt;</code>
                <?php echo lang('from a resultset array. This array must has two indexes, the first one is value will be placed on value attribute and the second one must be the label will be placed on option.')?>
            </p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">build_array_semicolon (string $indexes, string $values)</span>
                </code>
            </h4>
            <p><?php echo lang('Receives two strings each one separated by semicolon and returns a single array of index => value containing this labels and values.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">build_string_validation (string $validate)</span>
                </code>
            </h4>
            <p><?php echo lang('Builds a validation string, used by plugin jquery.validationEngine.js and by all application forms validation. All validations must be forwarded separating each one by semicolon.')?></p>
            <p>
                <?php echo lang('For more information see')?>
                <a href="https://github.com/posabsolute/jQuery-Validation-Engine" target="_blank">https://github.com/posabsolute/jQuery-Validation-Engine</a>.
            </p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">build_field (object $obj_field, string $table)</span>
                </code>
            </h4>
            <p>
                <?php echo lang('Prepares and returns an array representing a valid row to be inserted on table acm_module_form_field. This array is builded from a CodeIgniter object generated by the call')?>
                <code>$this->db->field_data(table)</code>.
            </p>
        </div>

    </div>

    <br />

    <div id="docs-log-library">

        <h3 class="sub-title">
            <?php echo lang('Logger library') ?>
            <small><code class="text-muted">$this->logger</code></small>
        </h3>

        <p><?php echo lang('Gathers methods related with the application logs and error logs.')?></p>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">db_log (string $text_log, string $action, string $table, array $additional_data)</span>
                </code>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-exchange"></i></a>
            </h4>
            <p><?php echo lang('Saves a log on database (table acm_log).')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">log_error (string $error_type, string $header, string $message, int $status_code)</span>
                </code>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-exchange"></i></a>
            </h4>
            <p><?php echo lang('Saves an error log on database (table acm_log_error).')?></p>
        </div>

    </div>

    <br />

    <div id="docs-tag-library">

        <h3 class="sub-title">
            <?php echo lang('Tag library') ?>
            <small><code class="text-muted">$this->tag</code></small>
        </h3>

        <p><?php echo lang('Gathers methods related with the application tags.')?></p>

        <?php echo message('warning', lang('Hint:'), lang('An app tag is every tag as') . ' <code>{URL_ROOT}</code> ' . lang('or') . ' <code>{URL_IMG}</code> ' . lang('inside a text. You can replace this tags by the corresponding value, in this case') . ' <code>URL_ROOT</code> ' . lang('and') . ' <code>URL_IMG</code> ' . lang('constant values.') ) ?>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">tag_replace (string $string)</span>
                </code>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-exchange"></i></a>
            </h4>
            <p><?php echo lang('Replaces all tag ocurrences by their respective values inside a string.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">array_tag_replace (string $value, array $arr_data)</span>
                </code>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-exchange"></i></a>
            </h4>
            <p>
                <?php echo lang('Replaces an specific tag as')?>
                <code>{<?php echo lang('NUMBER OR COLUMN_NAME')?>}</code>
                <?php echo lang('by the equivalent value inside an array.')?>
            </p>
        </div>

    </div>

    <br />

    <div id="docs-template-library">

        <h3 class="sub-title">
            <?php echo lang('Template library') ?>
            <small><code class="text-muted">$this->template</code></small>
        </h3>

        <p><?php echo lang('Gathers methods related with application template.')?></p>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">load_view (string $page, array $arr_vars, bool $return_html, bool $load_master_page)</span>
                </code>
            </h4>
            <p><?php echo lang('Loads a view script based on current template.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">load_page (string $page, array $arr_vars, bool $return_html, bool $load_master_page)</span>
                </code>
            </h4>
            <p><?php echo lang('Alias for ') ?><code>load_view()</code> <?php echo lang('above') ?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">load_html_component (string $component, array $params)</span>
                </code>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-exchange"></i></a>
            </h4>
            <p>
                <?php echo lang('Loads a HTML component, located at application/views/')?>
                <code>TEMPLATE</code>
                <?php echo lang('/html-components/')?>
                <code>$component</code>/<code>$component</code>.php.
                <?php echo lang('The second parameter is all variables must be available inside this component.')?>
            </p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">load_js_file (string $file)<span>
                </code>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-exchange"></i></a>
            </h4>
            <p>
                <?php echo lang('Returns the HTML of tag')?>
                <code>&lt;script src="$file"&gt;</code>
                <?php echo lang('according the forwarded file. It is necessary only the file name.')?>
            </p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">load_css_file (string $file)</span>
                </code>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-exchange"></i></a>
            </h4>
            <p>
                <?php echo lang('Returns the HTML of tag')?>
                <code>&lt;link href="$file"&gt;</code>
                <?php echo lang('according the forwarded file. It is necessary only the file name.')?>
            </p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">load_menu ()</span>
                </code>
            </h4>
            <p>
                <?php echo lang('Loads the application menu. The app menu is an HTML component placed at application/views/')?>
                <code>TEMPLATE</code>
                /html-components/menu/menu.php.
            </p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">load_user_info ()</span>
                </code>
            </h4>
            <p>
                <?php echo lang('Loads the user info HTML component. This component is placed at application/views/')?>
                <code>TEMPLATE</code>/html-components/user-info/user-info.php
                <?php echo lang('and is composed by name, email, language, group, etc.') ?>
            </p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">load_logo_area ()</span>
                </code>
            </h4>
            <p>
                <?php echo lang('Loads the application logo area. The logo area is an HTML component placed at application/views/')?>
                <code>TEMPLATE</code>/html-components/logo-area/logo-area.php
                <?php echo lang('and represents the application brand.') ?>
            </p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">app_settings_inputs ()</span>
                </code>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-exchange"></i></a>
            </h4>
            <p><?php echo lang('Returns a set of HTML hidden inputs, each one for each app setting as APP_NAME, TEMPLATE, etc.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">message (string $type, string $title, string $description, bool $close, string $style)</span>
                </code>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-exchange"></i></a>
            </h4>
            <p><?php echo lang('Returns the HTML of a message according with forwarded parameters.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">image (string $url_img)</span>
                </code>
                <a href="javascript:void(0)"><i class="fa fa-fw fa-exchange"></i></a>
            </h4>
            <p><?php echo lang('Returns the HTML component image, which is responsible for building an img tag, also checking if the given value is a font-awesome icon.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">get_array_menus (array $group)</span>
                </code>
            </h4>
            <p><?php echo lang('Returns all application menus in array/tree format (comes from table acm_menu).')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">menus_to_tree (array &$menus)</span>
                </code>
            </h4>
            <p><?php echo lang('Receives an array resultset from database and convert it on a tree format (used to build application menu).')?></p>
        </div>

    </div>

    <br />

    <div id="docs-validation-library">

        <h3 class="sub-title">
            <?php echo lang('Validation library') ?>
            <small><code class="text-muted">$this->validation</code></small>
        </h3>

        <p><?php echo lang('Gathers methods related with general validations.')?></p>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">is_date_format (string $value)</span>
                </code>
            </h4>
            <p><?php echo lang('Checks if the given value is on format DD/MM/YYYY.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">is_date_format_db (string $value)</span>
                </code>
            </h4>
            <p><?php echo lang('Checks if the given value is on format YYYY-MM-DD.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">is_class_name (string $name)</span>
                </code>
            </h4>
            <p><?php echo lang('Checks if the given value is a valid class name.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">is_variable_name (string $name)</span>
                </code>
            </h4>
            <p><?php echo lang('Checks if the given value is a valid variable name.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">is_double_ (string $number)</span>
                </code>
            </h4>
            <p><?php echo lang('Checks if the given value is a valid double.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">is_float_ (string $number)</span>
                </code>
            </h4>
            <p><?php echo lang('Checks if the given value is a valid float.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">is_currency (string $number)</span>
                </code>
            </h4>
            <p><?php echo lang('Checks if the given value is a valid currency value.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">is_integer_ (string $number)</span>
                </code>
            </h4>
            <p><?php echo lang('Checks if the given value is a valid integer.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">is_alfa (string $word)</span>
                </code>
            </h4>
            <p><?php echo lang('Checks if the given value is a valid alfa numeric value.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">is_letter (string $word)</span>
                </code>
            </h4>
            <p><?php echo lang('Checks if the given value is only letters value.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">is_equal (mixed $value_one, mixed $value_two)</span>
                </code>
            </h4>
            <p><?php echo lang('Checks if the given parameters match.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">is_email (string $email)</span>
                </code>
            </h4>
            <p><?php echo lang('Checks if the given value is a valid email.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">is_ip_v4 (string $ip)</span>
                </code>
            </h4>
            <p><?php echo lang('Checks if the given value is a valid ip v4 address.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">is_roman (string $number)</span>
                </code>
            </h4>
            <p><?php echo lang('Checks if the given value is a valid roman number.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">is_empty (mixed $value)</span>
                </code>
            </h4>
            <p><?php echo lang('Checks if the given value is empty even if was an empty string.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">length (string $value, int $ini, int $end)</span>
                </code>
            </h4>
            <p>
                <?php echo lang('Checks if the given value length is between') ?>
                <code>$ini</code>
                <?php echo lang('and')?>
                <code>$end</code>.
            </p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">min_length (int $value, int $length)</span>
                </code>
            </h4>
            <p>
                <?php echo lang('Checks if the given value length is until') ?>
                <code>$length</code>.
            </p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">max_length (int $value, int $length)</span>
                </code>
            </h4>
            <p>
                <?php echo lang('Checks if the given value length is more than') ?>
                <code>$length</code>.
            </p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">between (int $number, int $ini, int $end)</span>
                </code>
            </h4>
            <p>
                <?php echo lang('Checks if the given value is between') ?>
                <code>$ini</code>
                <?php echo lang('and')?>
                <code>$end</code>.
            </p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">is_hexa (string $hexa)</span>
                </code>
            </h4>
            <p><?php echo lang('Checks if the given value is a hexadecimal.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">is_special_char (string $word)</span>
                </code>
            </h4>
            <p><?php echo lang('Checks if the given value is only special chars.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">is_hexa_color (string $hexa)</span>
                </code>
            </h4>
            <p><?php echo lang('Checks if the given value is a valid hexadecimal color.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">is_cpf (string $cpf)</span>
                </code>
            </h4>
            <p><?php echo lang('Checks if the given value is a valid cpf number.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">is_cnpj (string $cnpj)</span>
                </code>
            </h4>
            <p><?php echo lang('Checks if the given value is a valid cnpj number.')?></p>
        </div>

        <div class="box-code">
            <h4>
                <code>
                    <span class="text-muted">public</span>
                    <span class="method">is_ssn (string $ssn)</span>
                </code>
            </h4>
            <p><?php echo lang('Checks if the given value is a valid ssn number.')?></p>
        </div>

    </div>

</div>

<br />
<br />

<div id="docs-html-components">

    <h2 class="main-title"><?php echo lang('HTML components') ?></h2>

    <p>
        <?php echo lang('HTML components are programmable HTML blocks that always repeat. A good example for a HTML component is the')?>
        <strong>application menu</strong>
        <?php echo lang('- it repeat many times for each page, so we decided to turn it into an HTML Component.')?>
    </p>

    <p><?php echo lang('Every HTML component is a file placed at:')?></p>

    <p><code>application/views/TEMPLATE/html-components/COMPONENT_NAME/COMPONENT_NAME.php</code></p>

    <p><?php echo lang('You can open any component file and edit the behavior as your own wish.')?> <i class="fa fa-fw fa-smile-o"></i></p>

    <p><?php echo lang('Basicly, you can load an HTML component through the call:')?></p>

    <p><code>$this->template->load_html_component (string $component, array $params)</code></p>

    <p>
        <?php echo lang('However some HTML components are called inside other methods or functions. Take for example the application menu: it is necessary to get all menus from database and turn them into a tree structure and then after that pass this adjusted menus to the component. We resumed all these operations to the call') ?>
        <code>$this->template->load_menu()</code>.
    </p>

    <p>
        <?php echo lang('The parameter') ?>
        <code>$params</code>
        <?php echo lang('is an array which every index will be turned into a variable of same name that will available on component file.') ?>
    </p>

    <p><?php echo message('info', lang('Note!'), lang('You can create your own HTML Components, just create a folder and a file with the same name inside the path above and then call it by the explained method.')) ?></p>

    <p><?php echo lang('ACME Framework has some pre-defined HTML Components that you can load from any place in a view file.')?></p>

    <br />

    <div id="docs-html-components-generic-table">

        <h3 class="sub-title">
            <?php echo lang('Generic table') ?>
        </h3>

        <p>
            <?php echo lang('This component is loaded every time that an Array_Table library object call the method')?>
            <code>process()</code> <?php echo lang('or') ?> <code>get_html()</code>.
            <?php echo lang('In other words, this HTML Component is the HTML table generated by the library')?>
            <a href="#docs-array-table-library">Array_Table</a>.
            <?php echo lang('The result is:')?></p>
        </p>

        <div class="row">
            <div class="col-sm-9">
                <div class="panel panel-default browser-window">

                    <div class="panel-heading circles">
                        <div class="circle circle-red"></div>
                        <div class="circle circle-yellow"></div>
                        <div class="circle circle-green"></div>
                    </div>

                    <div class="panel-body content">
                        <img src="<?php echo URL_UPLOAD ?>/site-content/app-hc-generic-table.png" class="img-responsive" />
                    </div>

                </div>
            </div>
        </div>

        <div class="box-code">
            <h4><?php echo lang('Placed at')?></h4>
            <p><code>application/views/TEMPLATE/html-components/generic-table/generic-table.php</code></p>
            <h4><?php echo lang('How to load')?></h4>
            <p><?php echo lang('You are not necessary to mannually load this component. It is automatically loaded when a table is generated. However you can edit the behavior of the table.')?></p>
        </div>

    </div>

    <br />

    <div id="docs-html-components-image">

        <h3 class="sub-title">
            <?php echo lang('Image') ?>
        </h3>

        <p>
            <?php echo lang('This component loads an image according with the given URL, also checking if the URL is a font-awesome. For example, an URL can be an absolute URL, or a value like')?>
            <code>{URL_IMG}/my_image.png</code>
            <?php echo lang('or can be a font-awesome value like')?>
            <code>&lt;i class="fa fa-home"&gt;&lt;/i&gt;</code>.
            <?php echo lang('The result is:') ?>
        </p>

        <div class="row">
            <div class="col-sm-9">
                <div class="panel panel-default browser-window">

                    <div class="panel-heading circles">
                        <div class="circle circle-red"></div>
                        <div class="circle circle-yellow"></div>
                        <div class="circle circle-green"></div>
                    </div>

                    <div class="panel-body content">
                        <img src="<?php echo URL_UPLOAD ?>/site-content/app-hc-image.png" class="img-responsive" />
                    </div>

                </div>
            </div>
        </div>

        <div class="box-code">
            <h4><?php echo lang('Placed at')?></h4>
            <p><code>application/views/TEMPLATE/html-components/image/image.php</code></p>
            <h4><?php echo lang('How to load')?></h4>
            <p>
                <?php echo lang('Through the helper function')?>
                <code>image (string $url)</code>.
            </p>
        </div>

    </div>

    <br />

    <div id="docs-html-components-logo-area">

        <h3 class="sub-title">
            <?php echo lang('Logo area') ?>
        </h3>

        <p><?php echo lang('This component loads an HTML block that contains the application name or the application logo. Visually is placed near the application menu.')?></p>

        <div class="row">
            <div class="col-sm-9">
                <div class="panel panel-default browser-window">

                    <div class="panel-heading circles">
                        <div class="circle circle-red"></div>
                        <div class="circle circle-yellow"></div>
                        <div class="circle circle-green"></div>
                    </div>

                    <div class="panel-body content">
                        <img src="<?php echo URL_UPLOAD ?>/site-content/app-hc-logo-area.png" class="img-responsive" />
                    </div>

                </div>
            </div>
        </div>

        <div class="box-code">
            <h4><?php echo lang('Placed at')?></h4>
            <p><code>application/views/TEMPLATE/html-components/logo-area/logo-area.php</code></p>
            <h4><?php echo lang('How to load')?></h4>
            <p>
                <?php echo lang('Through the call')?>
                <code>$this->template->load_logo_area ()</code>.
            </p>
        </div>

    </div>

    <br />

    <div id="docs-html-components-menu">

        <h3 class="sub-title">
            <?php echo lang('Menu') ?>
        </h3>

        <p><?php echo lang('This HTML component represents the application menu.')?></p>

        <div class="row">
            <div class="col-sm-9">
                <div class="panel panel-default browser-window">

                    <div class="panel-heading circles">
                        <div class="circle circle-red"></div>
                        <div class="circle circle-yellow"></div>
                        <div class="circle circle-green"></div>
                    </div>

                    <div class="panel-body content">
                        <img src="<?php echo URL_UPLOAD ?>/site-content/app-hc-menu.png" class="img-responsive" />
                    </div>

                </div>
            </div>
        </div>

        <div class="box-code">
            <h4><?php echo lang('Placed at')?></h4>
            <p><code>application/views/TEMPLATE/html-components/menu/menu.php</code></p>
            <h4><?php echo lang('How to load')?></h4>
            <p>
                <?php echo lang('Through the call')?>
                <code>$this->template->load_menu ()</code>.
            </p>
        </div>

    </div>

    <br />

    <div id="docs-html-components-message">

        <h3 class="sub-title">
            <?php echo lang('Message') ?>
        </h3>

        <p><?php echo lang('The HTML component message is an HTML block that represents an application message as the following examples:')?></p>

        <p><?php echo message('info', lang('Info:'), lang('This is an information message.')) ?></p>

        <p><?php echo message('warning', lang('Warning:'), lang('This is a warning message.')) ?></p>

        <p><?php echo message('danger', lang('Danger:'), lang('This is a danger message.')) ?></p>

        <p><?php echo message('success', lang('Success:'), lang('This is a success message.')) ?></p>

        <div class="box-code">
            <h4><?php echo lang('Placed at')?></h4>
            <p><code>application/views/TEMPLATE/html-components/message/message.php</code></p>
            <h4><?php echo lang('How to load')?></h4>
            <p>
                <?php echo lang('Through the helper function')?>
                <code>message (string $type, string $title, string $description, bool $close, string $style)</code>.
            </p>
        </div>

    </div>

    <br />

    <div id="docs-html-components-module-action">

        <h3 class="sub-title">
            <?php echo lang('Module action') ?>
        </h3>

        <p><?php echo lang('The HTML component represents an action like Update, View or whathever you want that will be placed on every row of module table data, which is generated according with the module SQL.')?></p>

        <p>
            <?php echo lang('You just need to create an action for your module on module Administration and set the link of this action as something like')?>
            <code>{URL_ROOT}/controller/action/{0}</code>,
            <?php echo lang('where the part')?>
            <code>{URL_ROOT}</code>
            <?php echo lang('will be replaced by the PHP constant value of same name, and the part') ?>
            <code>{0}</code>
            <?php echo lang('will be replaced by the value of column zero (0) of current row, for each row. Then the result is:')?>
        </p>

        <div class="row">
            <div class="col-sm-9">
                <div class="panel panel-default browser-window">

                    <div class="panel-heading circles">
                        <div class="circle circle-red"></div>
                        <div class="circle circle-yellow"></div>
                        <div class="circle circle-green"></div>
                    </div>

                    <div class="panel-body content">
                        <img src="<?php echo URL_UPLOAD ?>/site-content/app-hc-module-action.png" class="img-responsive" />
                    </div>

                </div>
            </div>
        </div>

        <div class="box-code">
            <h4><?php echo lang('Placed at')?></h4>
            <p><code>application/views/TEMPLATE/html-components/module-action/module-action.php</code></p>
            <h4><?php echo lang('How to load')?></h4>
            <p><?php echo lang('You are not necessary to mannually load this component. It is automatically loaded when a table is generated. However you can edit the behavior of the action as your own wish.')?></p>
        </div>

    </div>

    <br />

    <div id="docs-html-components-module-form-field">

        <h3 class="sub-title">
            <?php echo lang('Form field') ?>
        </h3>

        <p><?php echo lang('This HTML component is loaded for every form field when a module form is generated. A module form is an automatic form builded according with module table columns, and it can be a form that represents the operations create, update, delete and view.')?></p>

        <div class="row">
            <div class="col-sm-9">
                <div class="panel panel-default browser-window">

                    <div class="panel-heading circles">
                        <div class="circle circle-red"></div>
                        <div class="circle circle-yellow"></div>
                        <div class="circle circle-green"></div>
                    </div>

                    <div class="panel-body content">
                        <img src="<?php echo URL_UPLOAD ?>/site-content/app-hc-module-field.png" class="img-responsive" />
                    </div>

                </div>
            </div>
        </div>

        <div class="box-code">
            <h4><?php echo lang('Placed at')?></h4>
            <p><code>application/views/TEMPLATE/html-components/module-form-field/module-form-field.php</code></p>
            <h4><?php echo lang('How to load')?></h4>
            <p><?php echo lang('You are not necessary to mannually load this component. It is automatically loaded when a form is generated. However you can edit the behavior of the field as your own wish.')?></p>
        </div>

    </div>

    <br />

    <div id="docs-html-components-user-info">

        <h3 class="sub-title">
            <?php echo lang('User info') ?>
        </h3>

        <p><?php echo lang('This HTML component represents the user info area, that contains all information about the user such as name, image, group, etc.')?></p>

        <div class="row">
            <div class="col-sm-9">
                <div class="panel panel-default browser-window">

                    <div class="panel-heading circles">
                        <div class="circle circle-red"></div>
                        <div class="circle circle-yellow"></div>
                        <div class="circle circle-green"></div>
                    </div>

                    <div class="panel-body content">
                        <img src="<?php echo URL_UPLOAD ?>/site-content/app-hc-user-info.png" class="img-responsive" />
                    </div>

                </div>
            </div>
        </div>

        <div class="box-code">
            <h4><?php echo lang('Placed at')?></h4>
            <p><code>application/views/TEMPLATE/html-components/user-info/user-info.php</code></p>
            <h4><?php echo lang('How to load')?></h4>
            <p>
                <?php echo lang('Through the call')?>
                <code>$this->template->load_user_info ()</code>.
            </p>
        </div>

    </div>

</div>

<br />
<br />

<div id="docs-javascript">

    <h2 class="main-title"><?php echo lang('Javascript') ?></h2>

    <p>
        <?php echo lang('ACME Framework and the new application generated from it contains some useful javascript functions that are available and ready to use. All those functions are placed in file')?>
        <code>assets/js/app-functions.js</code>.
    </p>

    <div class="box-code">
        <h4>
            <code><span class="method">$.redirect (string url)</span></code>
        </h4>
        <p><?php echo lang('Redirects to the page of given URL.')?></p>
    </div>

     <div class="box-code">
        <h4>
            <code><span class="method">$.enable_loading ()</span></code>
        </h4>
        <p><?php echo lang('Shows the loading layer. Recommended for ajax calls.')?></p>
    </div>

    <div class="box-code">
        <h4>
            <code><span class="method">$.disable_loading ()</span></code>
        </h4>
        <p><?php echo lang('Hides the loading layer.')?></p>
    </div>

    <div class="box-code">
        <h4>
            <code><span class="method">$.create_cookie (string name, mixed value, int days)</span></code>
        </h4>
        <p><?php echo lang('Creates a cookie according with the given parameters.')?></p>
    </div>

    <div class="box-code">
        <h4>
            <code><span class="method">$.read_cookie (string name)</span></code>
        </h4>
        <p><?php echo lang('Gets a cookie value according with name.')?></p>
    </div>

    <div class="box-code">
        <h4>
            <code><span class="method">$.erase_cookie (string name)</span></code>
        </h4>
        <p><?php echo lang('Erases a cookie according with name.')?></p>
    </div>

    <div class="box-code">
        <h4>
            <code><span class="method">$.container_html ()</span></code>
        </h4>
        <p><?php echo lang('Puts all app content inside a html container.')?></p>
    </div>

    <div class="box-code">
        <h4>
            <code><span class="method">$.change_language (string languages)</span></code>
        </h4>
        <p>
            <?php echo lang('Send an ajax call to controller')?>
            <code>App_Login</code>
            <?php echo lang('requesting to change language. After complete, automatically reloads page.')?>
        </p>
    </div>

</div>

<style>
    body { position: relative; }
    .popover {
        max-width: none !important;
        width: auto !important;
    }
    .carousel-control,
    .carousel-control:hover{
        color: #000;
    }

    .main-title { padding-top: 100px; margin-top: -90px; position: relative; z-index: 0}
    .sub-title { padding-top: 90px; margin-top: -90px; }
</style>

<script>

    $(document).ready(function () {

        // Updating boxes
        $('.updating a').on('click', function(e) {
            $(this).closest('.updating').find('.updating-content').toggleClass('hidden');
            $(this).closest('.updating').find('.fa-fw').toggleClass('fa-caret-down fa-caret-right');
        });

        // Replace method types
        $('span.method, code.function').each(function() {

            var html = $(this).html().replace(/string |int |bool |array |object |mixed |constant /gi, function(matched){
                return '<span class="text-muted" style="font-size: 16px">' + matched + '</span>';
            });

            $(this).html(html);
        });

        // Popovers
        $('.box-code a i').popover( {
            trigger : 'hover',
            container: 'body',
            title : "<?php echo lang('Equivalent helper function call:') ?>",
            html: true,
            content: function () {
                var html = $(this).closest('h4').find('div').html();

                if (html == undefined)
                    html = $(this).closest('h4').find('span.method').html();

                return '<code style="white-space: normal">' + html + '</code>';
            }
        });

        // Attach scrollspy for docs table
        $('body').scrollspy({
            target: '#affix-nav'
        });

        // Remove module footer
        $('.module-footer').remove();

    });

</script>
