<?php
/* Smarty version 4.3.2, created on 2023-10-19 00:23:52
  from 'C:\laragon\www\zender\templates\dashboard\widgets\tabs\whatsapp.queue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530d9880d39b9_43445291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3a226c2d2f5aea80b8ad1ab6bf08c83b912ef6f' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\widgets\\tabs\\whatsapp.queue.tpl',
      1 => 1697678235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6530d9880d39b9_43445291 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header">
        <h4 class="card-title"><i class="la la-tasks"></i> <?php echo __("lang_tabs_wapage_queuetitle");?>
</h4>

        <div class="float-right">
            <button class="btn btn-lg btn-primary" title="<?php echo __("lang_table_btn_refresh");?>
" zender-action="refresh">
                <i class="la la-refresh la-lg"></i>
            </button>

            <button class="btn btn-lg btn-danger" title="<?php echo __("lang_and_what_sent_6");?>
" zender-trash="whatsapp.sent">
                <i class="la la-stream la-lg"></i>
            </button>

            <button class="btn btn-lg btn-primary" title="<?php echo __("lang_and_what_sent_10");?>
" zender-toggle="zender.whatsapp.quick">
                <i class="la la-telegram la-lg"></i>
                <span class="d-none d-sm-inline"><?php echo __("lang_and_what_sent_12");?>
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
