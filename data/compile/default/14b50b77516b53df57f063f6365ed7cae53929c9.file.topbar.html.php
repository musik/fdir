<?php /* Smarty version Smarty-3.1.10, created on 2013-11-29 00:44:41
         compiled from "/home/muzik/www/fdir/themes/default/topbar.html" */ ?>
<?php /*%%SmartyHeaderCode:1976677163529772f9eabaf4-64394948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14b50b77516b53df57f063f6365ed7cae53929c9' => 
    array (
      0 => '/home/muzik/www/fdir/themes/default/topbar.html',
      1 => 1385656849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1976677163529772f9eabaf4-64394948',
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
  'unifunc' => 'content_529772f9ec4078_23529605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529772f9ec4078_23529605')) {function content_529772f9ec4078_23529605($_smarty_tpl) {?><div id="topbg">
	<div id="topbar">
		<div id="topbar-left">您好，欢迎来到<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
！</div>
    	<div id="topbar-right"><?php echo $_smarty_tpl->tpl_vars['login_status']->value;?>
</div>
	</div>
</div><?php }} ?>