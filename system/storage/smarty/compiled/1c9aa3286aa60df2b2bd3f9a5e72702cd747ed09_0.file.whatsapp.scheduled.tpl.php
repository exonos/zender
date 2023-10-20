<?php
/* Smarty version 4.3.2, created on 2023-10-19 00:27:33
  from 'C:\laragon\www\zender\templates\dashboard\widgets\tabs\whatsapp.scheduled.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530da65dfe5d6_54538030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c9aa3286aa60df2b2bd3f9a5e72702cd747ed09' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\widgets\\tabs\\whatsapp.scheduled.tpl',
      1 => 1697678235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6530da65dfe5d6_54538030 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header">
        <h4 class="card-title"><i class="la la-clock"></i> <?php echo __("lang_messages_scheduled_title");?>
</h4>

        <div class="float-right">
            <button class="btn btn-lg btn-primary" zender-toggle="zender.add.whatsapp.scheduled">
                <i class="la la-calendar la-lg"></i>
                <span class="d-none d-sm-inline"><?php echo __("lang_and_what_sched_12");?>
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
