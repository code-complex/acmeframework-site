<div class="module-header" id="top">

    <div class="row">

        <div class="col-sm-12 col-md-12">

            <i class="fa fa-fw fa-book hidden-sm hidden-xs pull-right" style="font-size: 140px"></i>

            <h1 style="margin: 10px 0 20px 0">ACME Docs</h1>

            <h3 style="margin: 10px 0 10px 0"><?php echo lang('Read the full documentation. Become an ACME ninja!') ?></h3>

        </div>

    </div>

</div>

<div class="module-breadcrumbs">

    <div class="container">

    <div class="row">

        <div class="col-sm-12">

            <ol class="breadcrumb">

                <li><a href="<?php echo URL_ROOT ?>" style="font-size: 18px"><i class="fa fa-fw fa-home"></i></a></li>

                <li><a href="<?php echo URL_ROOT ?>/docs"><?php echo lang('ACME Docs') ?></a></li>

                <li>
                    <?php echo lang('Version') ?>
                    <?php echo $version ?>
                    &nbsp;
                    <small><a href="<?php echo URL_ROOT ?>/docs/older-versions"><?php echo lang('Older versions') ?></a></small>
                </li>

            </ol>

        </div>

    </div>

    </div>

</div>

<div class="module-body">

    <div class="row">

        <div class="col-md-9" data-target="#affix-nav" data-spy="scroll" style="padding-right: 60px">

            <?php echo load_html_component('docs-300-content', array('version' => $version)) ?>

        </div>

        <div class="col-md-3 hidden-sm">

            <?php echo load_html_component('docs-300-toc', array('version' => $version)) ?>

        </div>

    </div>

</div>
