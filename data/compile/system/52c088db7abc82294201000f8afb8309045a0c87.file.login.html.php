<?php /* Smarty version Smarty-3.1.10, created on 2012-11-25 11:55:49
         compiled from "/www/web/tool/public_html/themes/system/login.html" */ ?>
<?php /*%%SmartyHeaderCode:187921524050b196c5456193-89553111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52c088db7abc82294201000f8afb8309045a0c87' => 
    array (
      0 => '/www/web/tool/public_html/themes/system/login.html',
      1 => 1353815526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187921524050b196c5456193-89553111',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagetitle' => 0,
    'fileurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_50b196c547e5b8_15323190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b196c547e5b8_15323190')) {function content_50b196c547e5b8_15323190($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
<link href="../themes/system/skin/global.css" rel="stylesheet" type="text/css" />
<link href="../themes/system/skin/login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../static/scripts/jquery.js"></script>
<script type="text/javascript" src="../static/scripts/admin.js"></script>
</head>

<body>
<div id="loginbox">
	<h2>登录入口</h2>
    <div>
    <form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
    	<div id="formbox">
		<table>
        	<tr>
				<th>电子邮件：</th>
				<td><input name="email" type="text" class="ipt" id="email" size="20" maxlength="25" autocomplete="off" /></td>
			</tr>
			<tr>
				<th>登录密码：</th>
				<td><input name="pass" type="password" class="ipt" id="pass" size="20" maxlength="25" /></td>
			</tr>
		</table>
        </div>
    	<div id="btnbox">
		<input name="act" type="hidden" id="act" value="login">
		<input name="submit" type="submit" class="btn" value="登 陆">&nbsp;
		<input name="reset" type="reset" class="btn" value="重 填">
    	</div>
    </form>
    </div>
</div>
</body>
</html><?php }} ?>