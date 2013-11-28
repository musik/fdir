<?php /* Smarty version Smarty-3.1.10, created on 2012-11-25 19:01:40
         compiled from "/www/web/tool/public_html/themes/default/topbar.html" */ ?>
<?php /*%%SmartyHeaderCode:69118438150b196c0944761-54756492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3289fe5e7c5752b82580645c2888dcca6cef1ed3' => 
    array (
      0 => '/www/web/tool/public_html/themes/default/topbar.html',
      1 => 1353841068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69118438150b196c0944761-54756492',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_50b196c09510d4_79109807',
  'variables' => 
  array (
    'site_name' => 0,
    'login_status' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b196c09510d4_79109807')) {function content_50b196c09510d4_79109807($_smarty_tpl) {?><div id="topbg">
	<div id="topbar">
		<div id="topbar-left">您好，欢迎来到<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
！</div>
    	<div id="topbar-right"><?php echo $_smarty_tpl->tpl_vars['login_status']->value;?>
</div>
	</div>
</div><?php }} ?>