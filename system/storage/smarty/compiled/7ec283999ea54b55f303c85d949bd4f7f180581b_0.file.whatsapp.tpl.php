<?php
/* Smarty version 4.3.2, created on 2023-10-19 00:23:51
  from 'C:\laragon\www\zender\templates\dashboard\pages\whatsapp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530d987de6575_25666479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ec283999ea54b55f303c85d949bd4f7f180581b' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\pages\\whatsapp.tpl',
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
function content_6530d987de6575_25666479 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid" zender-wrapper>
    <?php $_smarty_tpl->_subTemplateRender("file:../modules/analytics.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="float-left">
                        <h1>
                            <i class="la la-whatsapp la-lg"></i> <?php echo __("lang_and_dash_pg_whats_line10");?>

                        </h1>
                    </div>
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
.queue" zender-tab-default>
                                        <i class="la la-tasks"></i>
                                        <span><?php echo __("lang_tabs_wapage_queuebtn");?>
</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.sent">
                                        <i class="la la-telegram"></i>
                                        <span><?php echo __("lang_and_dash_pg_whats_line28");?>
</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.received">
                                        <i class="la la-sms"></i>
                                        <span><?php echo __("lang_and_dash_pg_whats_line34");?>
</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.campaigns">
                                        <i class="la la-coffee"></i>
                                        <span><?php echo __("lang_pages_whatsapp_campaignstab");?>
</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.scheduled">
                                        <i class="la la-clock"></i>
                                        <span><?php echo __("lang_and_dash_pg_whats_line40");?>
</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.groups">
                                        <i class="la la-users"></i>
                                        <span><?php echo __("lang_pages_whatsapp_groupstab");?>
</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.accounts">
                                        <i class="la la-user-circle"></i>
                                        <span><?php echo __("lang_and_dash_pg_whats_line46");?>
</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
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
