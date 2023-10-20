<?php
/* Smarty version 4.3.2, created on 2023-10-19 00:22:07
  from 'C:\laragon\www\zender\templates\dashboard\widgets\charts\default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530d91f0f8902_45010596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b186d5c7e0c78704ab236b5f20984c9f7c5d172' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\widgets\\charts\\default.tpl',
      1 => 1697678232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6530d91f0f8902_45010596 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<div id="chart"></div>

<?php echo '<script'; ?>
 src="<?php echo _assets("js/libs/fetch.min.js");?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	fetchInject([
		"<?php echo _assets("js/functions.js");?>
"
	], fetchInject([
		"<?php echo _assets("js/libs/apexcharts.min.js");?>
",
		"<?php echo _assets("js/libs/iframeResizer.contentWindow.min.js");?>
"
	])).then(() => {
		zender.charts("<?php echo $_smarty_tpl->tpl_vars['chart']->value;?>
");
	});
<?php echo '</script'; ?>
><?php }
}
