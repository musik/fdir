<?php /* Smarty version Smarty-3.1.10, created on 2012-12-09 02:27:43
         compiled from "D:\site\aifang\themes\system\header.html" */ ?>
<?php /*%%SmartyHeaderCode:65850c3869f5aa4a9-00860828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe4a50789fc4eb1dd199f4e6b7eae7be644c9b66' => 
    array (
      0 => 'D:\\site\\aifang\\themes\\system\\header.html',
      1 => 1353846458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65850c3869f5aa4a9-00860828',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagetitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_50c3869f614322_46428792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c3869f614322_46428792')) {function content_50c3869f614322_46428792($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
<link href="../themes/system/skin/global.css" rel="stylesheet" type="text/css" />
<link href="../themes/system/skin/page.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../public/scripts/jquery.min.js"></script>
<script type="text/javascript" src="../public/scripts/admin.js"></script>
<script type="text/javascript" src="../public/editor/kindeditor-min.js"></script>
<script type="text/javascript" src="../public/editor/lang/zh_CN.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.listbox tr').mouseover(function() {
		$(this).addClass('over');
	});
	
	$('.listbox tr').mouseout(function() {
		$(this).removeClass('over');
	});
});
</script>
</head>

<body>
<div id="wrapper"><?php }} ?>