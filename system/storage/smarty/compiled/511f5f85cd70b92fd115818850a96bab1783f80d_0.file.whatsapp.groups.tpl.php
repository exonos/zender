<?php
/* Smarty version 4.3.2, created on 2023-10-19 00:27:31
  from 'C:\laragon\www\zender\templates\dashboard\widgets\tabs\whatsapp.groups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530da63ba4d50_08209190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '511f5f85cd70b92fd115818850a96bab1783f80d' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\widgets\\tabs\\whatsapp.groups.tpl',
      1 => 1697678234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6530da63ba4d50_08209190 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header">
        <h4 class="card-title"><i class="la la-users"></i> <?php echo __("lang_pages_wagroups_header");?>
</h4>

        <div class="float-right">
            <button class="btn btn-lg btn-danger" title="<?php echo __("lang_and_what_rev_6");?>
" zender-trash="whatsapp.groups">
                <i class="la la-stream la-lg"></i>
            </button>
            
            <button class="btn btn-lg btn-primary" title="<?php echo __("lang_and_what_sent_10");?>
" zender-toggle="zender.whatsapp.groups">
                <i class="la la-layer-group la-lg"></i>
                <span class="d-none d-sm-inline"><?php echo __("lang_pages_wagroups_fetchbtn");?>
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
