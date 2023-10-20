<?php
/* Smarty version 4.3.2, created on 2023-10-19 00:22:07
  from 'C:\laragon\www\zender\templates\dashboard\widgets\tabs\administration.default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530d91fdb5469_31958380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4082b926a92a39dbf4cb6d840d704c77c0bb30f' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\widgets\\tabs\\administration.default.tpl',
      1 => 1697678234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6530d91fdb5469_31958380 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header border-0">
        <h2>
            <i class="la la-chart-area"></i> <?php echo __("lang_administration_default_visitors");?>

        </h2>
        <h4><?php echo __("lang_dashboard_admin_tabdefaultmessageslast");?>
</h4>
    </div>

    <div class="card-body pt-0">
        <h4 class="text-uppercase">
            <i class="la la-globe la-lg"></i> <?php echo __("lang_administration_default_countries");?>

        </h4>

        <div class="embed-responsive">
            <iframe class="embed-responsive-item position-relative" zender-iframe="<?php echo site_url;?>
/widget/chart/admin.countries"></iframe>
        </div>
    </div>

    <div class="card-body pt-0">
        <h4 class="text-uppercase">
            <i class="la la-chrome la-lg"></i> <?php echo __("lang_administration_default_browsers");?>

        </h4>

        <div class="embed-responsive">
            <iframe class="embed-responsive-item position-relative" zender-iframe="<?php echo site_url;?>
/widget/chart/admin.browsers"></iframe>
        </div>
    </div>

    <div class="card-body pt-0">
        <h4 class="text-uppercase">
            <i class="la la-laptop la-lg"></i> <?php echo __("lang_administration_default_os");?>

        </h4>

        <div class="embed-responsive">
            <iframe class="embed-responsive-item position-relative" zender-iframe="<?php echo site_url;?>
/widget/chart/admin.os"></iframe>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header border-0">
        <h2>
            <i class="la la-chart-pie"></i> <?php echo __("lang_administration_default_usages");?>

        </h2>
        <h4><?php echo __("lang_dashboard_admin_tabdefaultmessageslast");?>
</h4>
    </div>

    <div class="card-body pt-0">
        <h4 class="text-uppercase">
            <i class="la la-mail-bulk la-lg"></i> <?php echo __("lang_administration_default_messages");?>

        </h4>

        <div class="embed-responsive">
            <iframe class="embed-responsive-item position-relative" zender-iframe="<?php echo site_url;?>
/widget/chart/admin.messages"></iframe>
        </div>
    </div>

    <div class="card-body pt-0">
        <h4 class="text-uppercase">
            <i class="la la-wrench la-lg"></i> <?php echo __("lang_administration_default_utilities");?>

        </h4>

        <div class="embed-responsive">
            <iframe class="embed-responsive-item position-relative" zender-iframe="<?php echo site_url;?>
/widget/chart/admin.utilities"></iframe>
        </div>
    </div>
</div>

<?php if (permission("manage_transactions")) {?>
<div class="card">
    <div class="card-header border-0">
        <h2>
            <i class="la la-coins"></i> <?php echo __("lang_dashboard_admin_tabdefaultearningstitle");?>
 
            <span class="badge badge-primary"><?php echo strtoupper(system_currency);?>
</span>
        </h2>
        <h4><?php echo __("lang_dashboard_admin_tabdefaultmessageslast");?>
</h4>
    </div>

    <div class="card-body pt-0">
        <h4 class="text-uppercase">
            <i class="la la-cubes la-lg"></i> <?php echo __("lang_administration_default_subscriptions");?>

        </h4>

        <div class="embed-responsive">
            <iframe class="embed-responsive-item position-relative" zender-iframe="<?php echo site_url;?>
/widget/chart/admin.subscriptions"></iframe>
        </div>
    </div>

    <div class="card-body pt-0">
        <h4 class="text-uppercase">
            <i class="la la-coins la-lg"></i> <?php echo __("lang_administration_default_credits");?>

        </h4>

        <div class="embed-responsive">
            <iframe class="embed-responsive-item position-relative" zender-iframe="<?php echo site_url;?>
/widget/chart/admin.credits"></iframe>
        </div>
    </div>

    <div class="card-body pt-0">
        <h4 class="text-uppercase">
            <i class="la la-handshake la-lg"></i> <?php echo __("lang_pages_administration_commissionstitle");?>

        </h4>

        <div class="embed-responsive">
            <iframe class="embed-responsive-item position-relative" zender-iframe="<?php echo site_url;?>
/widget/chart/admin.commissions"></iframe>
        </div>
    </div>
</div>
<?php }
}
}
