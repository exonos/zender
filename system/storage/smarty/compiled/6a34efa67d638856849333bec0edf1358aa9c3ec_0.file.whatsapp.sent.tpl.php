<?php
/* Smarty version 4.3.2, created on 2023-10-19 00:27:35
  from 'C:\laragon\www\zender\templates\dashboard\widgets\tabs\whatsapp.sent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530da67b90a63_69831084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a34efa67d638856849333bec0edf1358aa9c3ec' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\widgets\\tabs\\whatsapp.sent.tpl',
      1 => 1697678235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6530da67b90a63_69831084 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header">
        <h4 class="card-title"><i class="la la-telegram"></i> <?php echo __("lang_and_what_sent_3");?>
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
        </div>
    </div>

    <div class="card-body">
        <div class="dt-responsive table-responsive">
            <table class="table table-striped" zender-table></table>
        </div>
    </div>
</div><?php }
}
