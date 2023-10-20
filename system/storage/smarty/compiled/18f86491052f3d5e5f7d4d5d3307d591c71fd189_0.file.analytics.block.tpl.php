<?php
/* Smarty version 4.3.2, created on 2023-10-19 14:17:51
  from 'C:\laragon\www\zender\templates\default\modules\analytics.block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530ca0f31d784_84121255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18f86491052f3d5e5f7d4d5d3307d591c71fd189' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\default\\modules\\analytics.block.tpl',
      1 => 1697678236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6530ca0f31d784_84121255 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty(system_analytics_key)) {
echo '<script'; ?>
 async src="//www.googletagmanager.com/gtag/js?id=<?php echo system_analytics_key;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  window.dataLayer = window.dataLayer || [];
  function gtag(){
        dataLayer.push(arguments);
    }
  gtag("js", new Date());

  gtag("config", "<?php echo system_analytics_key;?>
");
<?php echo '</script'; ?>
>
<?php }
}
}
