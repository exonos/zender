<?php
/* Smarty version 4.3.2, created on 2023-10-19 10:11:25
  from 'C:\laragon\www\zender\templates\dashboard\pages\tools.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6531633d001c02_81357952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bb2aa8513745bab3c11adac74ae37b1da69ba4e' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\pages\\tools.tpl',
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
function content_6531633d001c02_81357952 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid" zender-wrapper>
    <?php $_smarty_tpl->_subTemplateRender("file:../modules/analytics.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="float-left">
                        <h1>
                            <i class="la la-toolbox la-lg"></i> <?php echo __("lang_dashboard_tools_title");?>

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
.keys" zender-tab-default>
                                        <i class="la la-key"></i>
                                        <span><?php echo __("lang_dashboard_tools_menukeys");?>
</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.webhooks">
                                        <i class="la la-code-branch"></i>
                                        <span><?php echo __("lang_dashboard_tools_menuhooks");?>
</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.actions">
                                        <i class="la la-robot"></i>
                                        <span><?php echo __("lang_dashboard_tools_menuactions");?>
</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.templates">
                                        <i class="la la-wrench"></i>
                                        <span><?php echo __("lang_dashboard_messages_menutemplates");?>
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
