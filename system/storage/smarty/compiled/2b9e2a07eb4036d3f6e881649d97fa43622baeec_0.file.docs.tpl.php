<?php
/* Smarty version 4.3.2, created on 2023-10-19 10:12:08
  from 'C:\laragon\www\zender\templates\dashboard\pages\docs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65316368135de4_71827702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b9e2a07eb4036d3f6e881649d97fa43622baeec' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\pages\\docs.tpl',
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
function content_65316368135de4_71827702 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid" zender-wrapper>
    <?php $_smarty_tpl->_subTemplateRender("file:../modules/analytics.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="float-left">
                        <h1>
                            <i class="la la-book la-lg"></i> <?php echo __("lang_and_dash_pg_doc_line10");?>

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
.api" zender-tab-default="false">
                                        <i class="la la-terminal"></i>
                                        <span><?php echo __("lang_and_dash_pg_doc_line28");?>
</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.webhooks">
                                        <i class="la la-code-branch"></i>
                                        <span><?php echo __("lang_and_dash_pg_doc_line34");?>
</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.actions">
                                        <i class="la la-robot"></i>
                                        <span><?php echo __("lang_and_dash_pg_doc_line40");?>
</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.devices">
                                        <i class="la la-android"></i>
                                        <span><?php echo __("lang_and_dash_pg_doc_line46");?>
</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" zender-tab="zender.<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
.partnership">
                                        <i class="la la-handshake"></i>
                                        <span><?php echo __("lang_and_dash_pg_doc_line52");?>
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
