<?php
/* Smarty version 4.3.2, created on 2023-10-19 14:17:54
  from 'C:\laragon\www\zender\templates\dashboard\modules\analytics.block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530ca12a0dc22_40279657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bf1e5de628530cf757d36e5451e76d017abde31' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\modules\\analytics.block.tpl',
      1 => 1697678232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6530ca12a0dc22_40279657 (Smarty_Internal_Template $_smarty_tpl) {
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
