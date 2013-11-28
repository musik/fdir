<?php /* Smarty version Smarty-3.1.10, created on 2012-12-13 13:04:25
         compiled from "G:\PHPnow\vhosts\0581.info\themes\default\topbar.html" */ ?>
<?php /*%%SmartyHeaderCode:2289550c961d90427d6-18942928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbc7b68f25d93bbc0590442f8b58fa8cf03b7e1b' => 
    array (
      0 => 'G:\\PHPnow\\vhosts\\0581.info\\themes\\default\\topbar.html',
      1 => 1353846442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2289550c961d90427d6-18942928',
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
  'unifunc' => 'content_50c961d90679b0_06842107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c961d90679b0_06842107')) {function content_50c961d90679b0_06842107($_smarty_tpl) {?><div id="topbg">
	<div id="topbar">
		<div id="topbar-left">您好，欢迎来到<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
！</div>
    	<div id="topbar-right"><?php echo $_smarty_tpl->tpl_vars['login_status']->value;?>
</div>
	</div>
</div><?php }} ?>