<?php
/* Smarty version 4.3.2, created on 2023-10-19 10:11:25
  from 'C:\laragon\www\zender\templates\dashboard\widgets\tabs\tools.keys.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6531633d2d9551_09236918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92bd39c86dbcd59957cf6a7ace6220bc25bfe788' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\widgets\\tabs\\tools.keys.tpl',
      1 => 1697678234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6531633d2d9551_09236918 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header">
        <h4 class="card-title"><i class="la la-key"></i> <?php echo __("lang_dashboard_tools_tabkeystitle");?>
</h4>

        <div class="float-right">
            <button class="btn btn-lg btn-primary" title="<?php echo __("lang_and_tool_key_6");?>
" zender-gototab="dashboard/docs" gototab-action="zender.docs.api">
                <i class="la la-book la-lg"></i>
                <span class="d-none d-sm-inline"><?php echo __("lang_and_tool_key_8");?>
</span>
            </button>

            <button class="btn btn-lg btn-primary" title="<?php echo __("lang_and_tool_key_11");?>
" zender-toggle="zender.add.apikey">
                <i class="la la-key la-lg"></i>
                <span class="d-none d-sm-inline"><?php echo __("lang_dashboard_btn_addkey");?>
</span>
            </button>
        </div>
    </div>

    <div class="card-body">
        <div class="dt-responsive table-responsive">
            <table class="table table-striped" zender-table></table>
        </div>
    </div>
</div><?php }
}
