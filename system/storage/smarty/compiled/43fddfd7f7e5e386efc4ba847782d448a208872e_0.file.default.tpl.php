<?php
/* Smarty version 4.3.2, created on 2023-10-19 00:22:04
  from 'C:\laragon\www\zender\templates\dashboard\pages\default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530d91cf1f670_07151687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43fddfd7f7e5e386efc4ba847782d448a208872e' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\pages\\default.tpl',
      1 => 1697678232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../modules/analytics.block.tpl' => 1,
    'file:../modules/footer.block.tpl' => 1,
  ),
),false)) {
function content_6530d91cf1f670_07151687 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid" zender-wrapper>
    <?php $_smarty_tpl->_subTemplateRender("file:../modules/analytics.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="<?php if (!isMobile) {?>float-left<?php } else { ?>text-center<?php }?>">
                        <?php if (system_freemodel < 2) {?>
                        <button class="btn btn-lg btn-primary" zender-toggle="zender.user.subscription">
                            <i class="la la-crown la-lg"></i>
                            <span class="d-none d-sm-inline"><?php echo __("lang_dashboard_nav_menusubscription");?>
</span>
                        </button>
                        <?php } else { ?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['package'])) {?>
                        <button class="btn btn-lg btn-primary" zender-toggle="zender.user.subscription">
                            <i class="la la-crown la-lg"></i>
                            <span class="d-none d-sm-inline"><?php echo __("lang_dashboard_nav_menusubscription");?>
</span>
                        </button>
                        <?php }?>
                        <?php }?>

                        <button class="btn btn-lg btn-primary" zender-toggle="zender.packages">
                            <i class="la la-cubes la-lg"></i>
                            <span class="d-none d-sm-inline"><?php echo __("lang_btn_packages");?>
</span>
                        </button>

                        <button class="btn btn-lg btn-primary" zender-toggle="zender.redeem">
                            <i class="la la-ticket la-lg"></i>
                            <span class="d-none d-sm-inline"><?php echo __("lang_btn_redeem");?>
</span>
                        </button>
                    </div>

                    <div class="<?php if (!isMobile) {?>float-right<?php } else { ?>text-center mt-2<?php }?>">
                        <a href="<?php echo site_url("dashboard/rates");?>
" class="btn btn-lg btn-primary" zender-nav>
                            <i class="la la-comments-dollar la-lg"></i>
                            <span class="d-none d-sm-inline"><?php echo __("lang_and_dashboard_pages_defailt_line37");?>
</span>
                        </a>

                        <a href="<?php echo site_url("dashboard/docs");?>
" class="btn btn-lg btn-primary" zender-nav>
                            <i class="la la-book la-lg"></i>
                            <span class="d-none d-sm-inline"><?php echo __("lang_and_dashboard_pages_default_line42");?>
</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php if (!isMobile) {?>
            <div class="col-9">
                <div class="card animated fadeIn">
                    <div class="card-header border-0">
                        <h2>
                            <i class="la la-mail-bulk la-lg"></i> 
                            <?php echo __("lang_and_dashboard_pages_default_line58");?>

                        </h2>
                        <h4 class="text-primary"><?php echo __("lang_and_dashboard_pages_default_line60");?>
</h4>
                    </div>

                    <div class="card-body pt-0 pb-0">
                        <div class="embed-responsive">
                            <iframe class="embed-responsive-item position-relative" zender-iframe="<?php echo site_url;?>
/widget/chart/dashboard.messages"></iframe>
                        </div>
                    </div>
                </div>

                <div class="card animated fadeIn">
                    <div class="card-header border-0">
                        <h2>
                            <i class="la la-chart-line la-lg"></i> 
                            <?php echo __("lang_and_dashboard_pages_default_line74");?>

                        </h2>
                        <h4 class="text-primary"><?php echo __("lang_and_dashboard_pages_default_line76");?>
</h4>
                    </div>

                    <div class="card-body pt-0 pb-0">
                        <div class="embed-responsive">
                            <iframe class="embed-responsive-item position-relative" zender-iframe="<?php echo site_url;?>
/widget/chart/dashboard.events"></iframe>
                        </div>
                    </div>
                </div>

                <div class="card animated fadeIn">
                    <div class="card-header border-0">
                        <h2>
                            <i class="la la-tools la-lg"></i> 
                            <?php echo __("lang_and_dashboard_pages_default_line90");?>

                        </h2>
                        <h4 class="text-primary"><?php echo __("lang_and_dashboard_pages_default_line92");?>
</h4>
                    </div>

                    <div class="card-body pt-0 pb-0">
                        <div class="embed-responsive">
                            <iframe class="embed-responsive-item position-relative" zender-iframe="<?php echo site_url;?>
/widget/chart/dashboard.utilities"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>

            <div class="<?php if (!isMobile) {?>col-3<?php } else { ?>col-12<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['data']->value['partner'] < 2) {?>
                <div class="card right-widget">
                    <div class="card-body">
                        <h4 class="text-uppercase">
                            <i class="la la-handshake la-lg"></i> <?php echo __("lang_and_dashboard_pages_default_line109");?>

                        </h4>

                        <ul class="list-unstyled">
                            <li class="media">
                                <i class="la la-hand-holding-usd mr-2"></i>
                                <div class="media-body">
                                    <h6 class="m-0 text-uppercase">
                                        <?php echo __("lang_and_dashboard_pages_default_line117");?>

                                    </h6>
                                </div>
                                <div class="text-right">
                                    <span class="text-warning">
                                        <span title="<?php echo $_smarty_tpl->tpl_vars['data']->value['balance']['earnings'];?>
 <?php echo strtoupper(system_currency);?>
"><?php echo number_format($_smarty_tpl->tpl_vars['data']->value['balance']['earnings'],2);?>
 <?php echo strtoupper(system_currency);?>
</span>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="card-footer text-center">
                        <button class="btn btn-primary btn-lg" zender-toggle="zender.add.payout">
                            <i class="la la-money-check-alt"></i> <?php echo __("lang_and_dashboard_pages_default_line131");?>

                        </button>
                    </div>
                </div>
                <?php }?>

                <div class="card right-widget">
                    <div class="card-body">
                        <h4 class="text-uppercase">
                            <i class="la la-digital-tachograph la-lg"></i> <?php echo __("lang_and_dashboard_pages_default_line140");?>

                        </h4>

                        <ul class="list-unstyled">
                            <li class="media">
                                <i class="la la-coins mr-2"></i>
                                <div class="media-body">
                                    <h6 class="m-0 text-uppercase">
                                        <?php echo __("lang_and_dashboard_pages_default_line148");?>

                                    </h6>
                                </div>
                                <div class="text-right">
                                    <span class="text-warning">
                                        <span title="<?php echo $_smarty_tpl->tpl_vars['data']->value['balance']['credits'];?>
 <?php echo strtoupper(system_currency);?>
"><?php echo number_format($_smarty_tpl->tpl_vars['data']->value['balance']['credits'],2);?>
 <?php echo strtoupper(system_currency);?>
</span>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="card-footer text-center">
                        <button class="btn btn-primary btn-lg" zender-toggle="zender.add.credits">
                            <i class="la la-coins"></i> <?php echo __("lang_and_dashboard_pages_default_line162");?>

                        </button>
                    </div>
                </div>

                <div class="card right-widget">
                    <div class="card-body">
                        <h4 class="text-uppercase">
                            <i class="la la-chart-bar la-lg"></i> <?php echo __("lang_and_dashboard_pages_default_line170");?>

                        </h4>

                        <ul class="list-unstyled">
                            <li class="media">
                                <i class="la la-arrow-circle-up text-success mr-2"></i>
                                <div class="media-body">
                                    <h5 class="m-0 text-uppercase">
                                        <?php echo __("lang_and_dash_pg_def_line178");?>

                                    </h5>
                                </div>
                                <div class="text-right">
                                    <h5 class="text-uppercase text-success"><?php echo $_smarty_tpl->tpl_vars['data']->value['ratio']['success'];?>
%</h5>
                                </div>
                            </li>

                            <li class="media">
                                <i class="la la-arrow-circle-down text-danger mr-2"></i>
                                <div class="media-body">
                                    <h5 class="m-0 text-uppercase">
                                        <?php echo __("lang_and_dash_pg_def_line190");?>

                                    </h5>
                                </div>
                                <div class="text-right">
                                    <h5 class="text-uppercase text-danger"><?php echo $_smarty_tpl->tpl_vars['data']->value['ratio']['failed'];?>
%</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card right-widget">
                    <div class="card-body">
                        <h4 class="text-uppercase">
                            <i class="la la-link la-lg"></i> <?php echo __("lang_and_dash_pg_def_line204");?>

                        </h4>

                        <?php if (empty($_smarty_tpl->tpl_vars['data']->value['package'])) {?>
                        <div class="alert alert-danger mt-3 mb-0">
                            <?php echo __("lang_and_dash_pg_def_line209");?>

                        </div>
                        <?php } else { ?>
                        <ul class="list-unstyled">
                            <li class="media">
                                <i class="la la-mobile mr-2"></i>
                                <div class="media-body">
                                    <h5 class="m-0 text-uppercase">
                                        <?php echo __("lang_and_dash_pg_def_line217");?>

                                    </h5>
                                </div>
                                <div class="text-right">
                                    <span class="text-warning">
                                        <?php echo $_smarty_tpl->tpl_vars['data']->value['count']['devices'];?>
 / <?php if ($_smarty_tpl->tpl_vars['data']->value['package']['device_limit'] > 0) {
echo $_smarty_tpl->tpl_vars['data']->value['package']['device_limit'];
} else { ?><i class="la la-infinity infinity"></i><?php }?>
                                    </span>
                                    <h5 class="text-uppercase"><?php echo __("lang_and_dash_pg_def_line224");?>
</h5>
                                </div>
                            </li>

                            <li class="media">
                                <i class="la la-whatsapp mr-2"></i>
                                <div class="media-body">
                                    <h5 class="m-0 text-uppercase">
                                        <?php echo __("lang_and_dash_pg_def_line232");?>

                                    </h5>
                                </div>
                                <div class="text-right">
                                    <span class="text-warning">
                                        <?php echo $_smarty_tpl->tpl_vars['data']->value['count']['accounts'];?>
 / <?php if ($_smarty_tpl->tpl_vars['data']->value['package']['wa_account_limit'] > 0) {
echo $_smarty_tpl->tpl_vars['data']->value['package']['wa_account_limit'];
} else { ?><i class="la la-infinity infinity"></i><?php }?>
                                    </span>
                                    <h5 class="text-uppercase"><?php echo __("lang_and_dash_pg_def_line239");?>
</h5>
                                </div>
                            </li>
                        </ul>
                        <?php }?>
                    </div>
                </div>

                            </div>
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div><?php }
}
