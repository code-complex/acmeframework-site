<div class="module-header">

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

                <li><?php echo lang('Older versions') ?></li>

            </ol>

        </div>

    </div>

    </div>

</div>

<div class="module-body">

    <div class="row">

        <div class="col-sm-9">

            <div id="docs-quick-start">

                <h2><?php echo lang('Older versions') ?></h2>

                <p><?php echo lang('Need a different version of ACME Framework? Just choose it below.') ?></p>

                <br />

                <div class="table-responsive">

                    <table class="table table-hover table-bordered no-footer">

                        <thead>
                            <tr>
                                <th style="width: 01%"><?php echo lang('Version')?></th>
                                <th><?php echo lang('Name')?></th>
                                <th style="width: 01%"><?php echo lang('Download')?></th>
                            </tr>
                        </thead>

                        <tbody>

                        <?php
                        $i = 0;
                        foreach ($allowed as $v) { ?>
                            <?php if($v != 'older-versions') {?>
                            <tr>
                                <td><a href="<?php echo URL_ROOT ?>/docs/<?php echo $v ?>" class="text-bold text-unbroken" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo lang('Read the docs') ?>"><?php echo $v ?></a></td>
                                <td>
                                    ACME Framework

                                    <?php if($v == ACME_VERSION) {?>
                                    &nbsp;
                                    <span class="label label-info"><?php echo lang('Latest release')?></span>
                                    <?php } ?>

                                    <?php if($v == '1.0.0') {?>
                                    &nbsp;
                                    <span class="text-muted"><?php echo lang('also known as ACME Engine')?></span>
                                    <?php } ?>
                                </td>
                                <td style=" white-space:nowrap">
                                    <a href="http://github.com/code-complex/acmeframework/archive/<?php echo $v ?>.zip" target="_blank" class="text-unbroken"><i class="fa fa-fw fa-external-link-square"></i> http://github.com/code-complex/acmeframework/archive/<?php echo $v ?>.zip</a>
                                </td>
                            </tr>
                            <?php } ?>
                        <?php $i++; } ?>

                        </tbody>

                    </table>

                </div>

            </div>

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
