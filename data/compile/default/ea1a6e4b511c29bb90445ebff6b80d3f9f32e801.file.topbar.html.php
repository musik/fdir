<?php /* Smarty version Smarty-3.1.10, created on 2012-10-27 21:18:59
         compiled from "F:\www\htdocs\themes\default\topbar.html" */ ?>
<?php /*%%SmartyHeaderCode:897508bdf434f2e76-19394868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea1a6e4b511c29bb90445ebff6b80d3f9f32e801' => 
    array (
      0 => 'F:\\www\\htdocs\\themes\\default\\topbar.html',
      1 => 1342002056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '897508bdf434f2e76-19394868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_name' => 0,
    'login_status' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508bdf435197a6_51003027',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508bdf435197a6_51003027')) {function content_508bdf435197a6_51003027($_smarty_tpl) {?><div id="topbg">
	<div id="topbar">
		<div id="topbar-left">您好，欢迎来到<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
！</div>
    	<div id="topbar-right"><?php echo $_smarty_tpl->tpl_vars['login_status']->value;?>
</div>
	</div>
</div><?php }} ?>