<?php
/* Smarty version 4.3.2, created on 2023-10-19 00:24:02
  from 'C:\laragon\www\zender\templates\dashboard\widgets\tabs\whatsapp.accounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530d992904630_25430532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35a00c8d6d44df27d821c5f876bb9e69ec45e293' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\widgets\\tabs\\whatsapp.accounts.tpl',
      1 => 1697678234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6530d992904630_25430532 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header">
        <h4 class="card-title"><i class="la la-whatsapp"></i> <?php echo __("lang_tabs_whatsappaccounts_titleheader");?>
</h4>

        <div class="float-right">
            <button class="btn btn-lg btn-primary" title="<?php echo __("lang_table_btn_refresh");?>
" zender-action="refresh">
                <i class="la la-refresh la-lg"></i>
            </button>

            <button class="btn btn-lg btn-primary" title="<?php echo __("lang_and_what_accnt_6");?>
" relink-unique="none" wa-link-url="link" wa-link-title="<?php echo __("lang_widget_waaddaccount_title");?>
" zender-toggle="zender.add.whatsapp">
                <i class="la la-whatsapp la-lg"></i>
                <span class="d-none d-sm-inline"><?php echo __("lang_and_what_accnt_8");?>
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
