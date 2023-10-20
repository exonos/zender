<?php
/* Smarty version 4.3.2, created on 2023-10-19 10:12:08
  from 'C:\laragon\www\zender\templates\dashboard\widgets\tabs\docs.api.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65316368447cc3_69136433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e137590e83c19cba159898e418b66b2459b6f29a' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\widgets\\tabs\\docs.api.tpl',
      1 => 1697678234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65316368447cc3_69136433 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-header">
        <h4 class="card-title"><i class="la la-terminal"></i> <?php echo __("lang_and_doc_api_3");?>
</h4>
    </div>

    <div class="card-body filemanager-container">
        <div class="embed-responsive">
            <iframe class="embed-responsive-item position-relative" scrolling="no" zender-iframe="<?php echo site_url;?>
/api"></iframe>
        </div>
    </div>
</div><?php }
}
