<?php
/* Smarty version 4.3.2, created on 2023-10-19 14:17:51
  from 'C:\laragon\www\zender\templates\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530ca0f2c1fa8_02557357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95e5070d9b50e3ab2e25123192ff5f56709745bc' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\default\\header.tpl',
      1 => 1697678235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./modules/header.block.tpl' => 1,
  ),
),false)) {
function content_6530ca0f2c1fa8_02557357 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\zender\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<!DOCTYPE html>
<html lang="en" <?php if (language_rtl) {?>dir="rtl"<?php }?>>

<head>
    <link rel="dns-prefetch" href="//fonts.googleapis.com">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="<?php echo smarty_modifier_truncate(system_site_desc,165);?>
">
    <link rel="icon" href="<?php echo get_image("favicon");?>
">

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 &middot; <?php echo system_site_name;?>
</title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Manrope:wght@400;500;700">
    <link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap">
    <link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="<?php echo _assets("css/libs/line-awesome.min.css");?>
">
    <link rel="stylesheet" href="<?php echo _assets("css/libs/flag-icon.min.css");?>
">
    <link rel="stylesheet" href="<?php if (language_rtl) {
echo assets("css/libs/bootstrap.rtl.css");
} else {
echo assets("css/libs/bootstrap.css");
}?>">
    <link rel="stylesheet" href="<?php echo assets("css/libs/plugins.css");?>
">
    <link rel="stylesheet" href="<?php if (language_rtl) {
echo assets("css/style.rtl.min.css");
} else {
echo assets("css/style.min.css");
}?>">

    <style>
        .accent-header {
            background: url(<?php echo get_image("bg");?>
) top center;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <?php $_smarty_tpl->_subTemplateRender("file:./modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
