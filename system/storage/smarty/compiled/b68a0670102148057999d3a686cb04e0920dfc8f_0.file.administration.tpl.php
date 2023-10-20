<?php
/* Smarty version 4.3.2, created on 2023-10-19 00:22:07
  from 'C:\laragon\www\zender\templates\dashboard\pages\administration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530d91f6ce118_70739219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b68a0670102148057999d3a686cb04e0920dfc8f' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\pages\\administration.tpl',
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
function content_6530d91f6ce118_70739219 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid" zender-wrapper>
    <?php $_smarty_tpl->_subTemplateRender("file:../modules/analytics.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="float-left">
                        <h1>
                            <i class="la la-tools la-lg"></i> <?php echo __("lang_dashboard_admin_title");?>

                        </h1>
                    </div>

                    <?php if (super_admin) {?>
                    <div class="float-right">
                        <button class="btn btn-lg btn-primary" title="<?php echo __("lang_pages_admin_tokenrefreshbutthelp");?>
" zender-action="token">
                            <i class="la la-refresh la-lg"></i>
                            <span class="d-none d-sm-inline"><?php echo __("lang_pages_admin_tokenrefreshbutt");?>
</span>
                        </button>

                        <button class="btn btn-lg btn-danger" title="<?php echo __("lang_pages_admin_cachehelp");?>
" zender-action="clear">
                            <i class="la la-trash la-lg"></i>
                            <span class="d-none d-sm-inline"><?php echo __("lang_administration_landing_btncache");?>
</span>
                        </button>

                        <button class="btn btn-lg btn-primary" title="<?php echo __("lang_pages_admin_themehelp");?>
" zender-toggle="zender.admin.theme">
                            <i class="la la-palette la-lg"></i>
                            <span class="d-none d-sm-inline"><?php echo __("lang_dashboard_btn_theme");?>
</span>
                        </button>

                        <button class="btn btn-lg btn-primary" title="<?php echo __("lang_pages_admin_systemsettingshelp");?>
" zender-toggle="zender.admin.settings">
                            <i class="la la-cog la-lg"></i>
                            <span class="d-none d-sm-inline"><?php echo __("lang_dashboard_btn_settings");?>
</span>
                        </button>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-md-4">
                <div class="tabs-menu">
                    <div class="card">
                        <div class="card-body">
                            <ul>
                                <li class="nav-item">
                                    <a href="#" class="nav-link active" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.default" zender-tab-default="false">
                                        <i class="la la-chart-area"></i>
                                        <span><?php echo __("lang_dashboard_admin_menustats");?>
</span>
                                    </a>
                                </li>
                                <?php if (permission("manage_users")) {?>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.users">
                                        <i class="la la-users"></i>
                                        <span><?php echo __("lang_dashboard_admin_menuusers");?>
</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if (permission("manage_roles")) {?>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.roles">
                                        <i class="la la-shield"></i>
                                        <span><?php echo __("lang_dashboard_admin_menuroles");?>
</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if (permission("manage_packages")) {?>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.packages">
                                        <i class="la la-cubes"></i>
                                        <span><?php echo __("lang_dashboard_admin_menupackages");?>
</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if (permission("manage_vouchers")) {?>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.vouchers">
                                        <i class="la la-money-bill-wave"></i>
                                        <span><?php echo __("lang_dashboard_admin_menuvouchers");?>
</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if (permission("manage_subscriptions")) {?>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.subscriptions">
                                        <i class="la la-crown"></i>
                                        <span><?php echo __("lang_dashboard_admin_menusubscriptions");?>
</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if (permission("manage_transactions")) {?>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.transactions">
                                        <i class="la la-coins"></i>
                                        <span><?php echo __("lang_dashboard_admin_menutransactions");?>
</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if (permission("manage_payouts")) {?>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.payouts">
                                        <i class="la la-money-check-alt"></i>
                                        <span><?php echo __("lang_administration_landing_payouts");?>
</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if (permission("manage_widgets")) {?>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.widgets">
                                        <i class="la la-puzzle-piece"></i>
                                        <span><?php echo __("lang_dashboard_admin_menuwidgets");?>
</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if (permission("manage_pages")) {?>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.pages">
                                        <i class="la la-stream"></i>
                                        <span><?php echo __("lang_dashboard_admin_menupages");?>
</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if (permission("manage_marketing")) {?>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.marketing">
                                        <i class="la la-bullhorn"></i>
                                        <span><?php echo __("lang_administration_landing_marketing");?>
</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if (permission("manage_languages")) {?>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.languages">
                                        <i class="la la-language"></i>
                                        <span><?php echo __("lang_dashboard_admin_menulanguages");?>
</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if (permission("manage_gateways")) {?>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.gateways">
                                        <i class="la la-code"></i>
                                        <span><?php echo __("lang_administration_landing_gateways");?>
</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if (permission("manage_shorteners")) {?>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.shorteners">
                                        <i class="la la-link"></i>
                                        <span><?php echo __("lang_administration_landing_shorteners");?>
</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if (permission("manage_plugins")) {?>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.plugins">
                                        <i class="la la-cogs"></i>
                                        <span><?php echo __("lang_dashboard_admin_menuplugins");?>
</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if (permission("manage_api")) {?>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.api">
                                        <i class="la la-terminal"></i>
                                        <span><?php echo __("lang_administration_landing_api");?>
</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if (super_admin) {?>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.filemanager">
                                        <i class="la la-file-code"></i>
                                        <span><?php echo __("lang_administration_landing_editor");?>
</span>
                                    </a>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>

                <?php if (super_admin) {?>
                <div class="card text-center">
                    <div class="card-header d-block pt-3 pb-2">
                        <h3 class="text-uppercase">
                            <i class="la la-android la-lg"></i> <?php echo __("lang_admin_gateway_title");?>

                        </h3>
                    </div>

                    <div class="card-body">
                        <h4 class="text-uppercase"><?php echo __("lang_admin_gateway_status");?>
: <?php if ($_smarty_tpl->tpl_vars['data']->value['gateway']) {?><span class="badge badge-success"><?php echo __("lang_admin_gateway_uploaded");?>
</span><?php } else { ?><span class="badge badge-danger"><?php echo __("lang_admin_gateway_notuploaded");?>
</span><?php }?></h4>
                        <h4 class="text-uppercase"><?php echo __("lang_administration_landing_build");?>
: <span class="badge badge-success">v<?php echo system_apk_version;?>
</span></h4>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-md btn-primary" zender-build>
                            <i class="la la-hammer la-lg"></i> <?php echo __("lang_dashboard_btn_build");?>

                        </button>

                        <button class="btn btn-md btn-primary" zender-toggle="zender.admin.builder">
                            <i class="la la-tools la-lg"></i> <?php echo __("lang_dashboard_btn_buildsettings");?>

                        </button>
                    </div>
                </div>

                <div class="card text-center">
                    <div class="card-header d-block pt-3 pb-2">
                        <h3 class="text-uppercase">
                            <i class="la la-whatsapp la-lg"></i> <?php echo __("lang_template_administration_wablocktitle");?>

                        </h3>
                    </div>

                    <div class="card-body">
                        <?php if (empty(system_wa_server) || empty(system_wa_port)) {?>
                        <h4 class="text-uppercase"><span class="badge badge-danger"><?php echo __("lang_template_administration_wablocknotconfig");?>
</span></h4>
                        <?php } else { ?>
                        <h4 class="text-uppercase"><?php echo __("lang_template_administration_wablockstatus");?>
 <?php if ($_smarty_tpl->tpl_vars['data']->value['whatsapp']) {?><span class="badge badge-success"><?php echo __("lang_template_administration_wablockonline");?>
</span><?php } else { ?><span class="badge badge-danger"><?php echo __("lang_template_administration_wablockoffline");?>
</span><?php }?></h4>
                        <?php }?>
                    </div>
                </div>

                <div class="card text-center">
                    <div class="card-header d-block pt-3 pb-2">
                        <h3 class="text-uppercase">
                            <i class="la la-cogs la-lg"></i> <?php echo __("lang_administration_landing_system");?>

                        </h3>
                    </div>

                    <div class="card-body">
                        <h4 class="text-uppercase"><?php echo __("lang_admin_update_installed");?>
: <span class="badge badge-success">v<?php echo version;?>
</span></h4>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-md btn-primary" zender-toggle="zender.system.update">
                            <i class="la la-terminal la-lg"></i> <?php echo __("lang_admin_update_btn");?>

                        </button>

                        <button class="btn btn-md btn-primary" zender-support>
                            <i class="la la-headset la-lg"></i>
                            <span class="d-none d-sm-inline"><?php echo __("lang_dashboard_btn_support");?>
</span>
                        </button>
                    </div>
                </div>
                <?php }?>
            </div>

            <div class="col-xl-9 col-md-8">
                <zender-tab-content></zender-tab-content>
            </div>
        </div>
    </div>
    
    <?php $_smarty_tpl->_subTemplateRender("file:../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div><?php }
}
