<?php
/* Smarty version 4.3.2, created on 2023-10-19 14:17:54
  from 'C:\laragon\www\zender\templates\dashboard\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6530ca129f4f41_96955897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa40aaed3d490762f4982ace4f6fff26675509d7' => 
    array (
      0 => 'C:\\laragon\\www\\zender\\templates\\dashboard\\header.tpl',
      1 => 1697678232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./modules/header.block.tpl' => 1,
  ),
),false)) {
function content_6530ca129f4f41_96955897 (Smarty_Internal_Template $_smarty_tpl) {
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

    <link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap">
    <link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="<?php echo _assets("css/libs/line-awesome.min.css");?>
">
    <link rel="stylesheet" href="<?php echo _assets("css/libs/flag-icon.min.css");?>
">
    <link rel="stylesheet" href="<?php if (language_rtl) {
echo assets("css/libs/bootstrap.rtl.min.css");
} else {
echo assets("css/libs/bootstrap.min.css");
}?>">
    <link rel="stylesheet" href="<?php if (language_rtl) {
echo assets("css/style.rtl.min.css");
} else {
echo assets("css/style.min.css");
}?>">

    <style>
        body {
            background: url(<?php echo get_image("bg");?>
) top center;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <?php if (logged_id && !in_array($_smarty_tpl->tpl_vars['page']->value,array("misc","login","register","forgot"))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:./modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
}
}
