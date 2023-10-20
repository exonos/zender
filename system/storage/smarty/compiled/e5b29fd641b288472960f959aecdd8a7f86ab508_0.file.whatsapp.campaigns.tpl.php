<?php
/* Smarty version 4.3.2, created on 2023-10-19 00:27:34
  from 'C:\laragon\www\zender\templates\dashboard\widgets\tabs\whatsapp.campaigns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530da6678c208_87276184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5b29fd641b288472960f959aecdd8a7f86ab508' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\widgets\\tabs\\whatsapp.campaigns.tpl',
      1 => 1697678234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6530da6678c208_87276184 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header">
        <h4 class="card-title"><i class="la la-coffee"></i> <?php echo __("lang_pages_wacampaigns_header");?>
</h4>

        <div class="float-right">
            <button class="btn btn-lg btn-primary" title="<?php echo __("lang_table_btn_refresh");?>
" zender-action="refresh">
                <i class="la la-refresh la-lg"></i>
            </button>

            <button class="btn btn-lg btn-primary"  title="<?php echo __("lang_and_what_sent_15");?>
" zender-toggle="zender.whatsapp.bulk">
                <i class="la la-mail-bulk la-lg"></i>
                <span class="d-none d-sm-inline"><?php echo __("lang_and_what_sent_17");?>
</span>
            </button>

            <button class="btn btn-lg btn-primary" title="<?php echo __("lang_and_what_sent_20");?>
" zender-toggle="zender.whatsapp.excel">
                <i class="la la-file-excel la-lg"></i>
                <span class="d-none d-sm-inline"><?php echo __("lang_btn_bulkexcel");?>
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
