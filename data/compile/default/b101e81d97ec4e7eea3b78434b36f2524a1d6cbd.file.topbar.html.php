<?php /* Smarty version Smarty-3.1.10, created on 2012-12-09 02:22:51
         compiled from "D:\site\aifang\themes\default\topbar.html" */ ?>
<?php /*%%SmartyHeaderCode:567150c3857ba98a87-12350173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b101e81d97ec4e7eea3b78434b36f2524a1d6cbd' => 
    array (
      0 => 'D:\\site\\aifang\\themes\\default\\topbar.html',
      1 => 1353846442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '567150c3857ba98a87-12350173',
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
  'unifunc' => 'content_50c3857bade531_03896637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c3857bade531_03896637')) {function content_50c3857bade531_03896637($_smarty_tpl) {?><div id="topbg">
	<div id="topbar">
		<div id="topbar-left">您好，欢迎来到<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
！</div>
    	<div id="topbar-right"><?php echo $_smarty_tpl->tpl_vars['login_status']->value;?>
</div>
	</div>
</div><?php }} ?>