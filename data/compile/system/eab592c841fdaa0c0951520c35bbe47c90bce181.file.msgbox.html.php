<?php /* Smarty version Smarty-3.1.10, created on 2012-10-27 21:51:59
         compiled from "F:\www\htdocs\themes\system\msgbox.html" */ ?>
<?php /*%%SmartyHeaderCode:26146508be6ffde4673-50301633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eab592c841fdaa0c0951520c35bbe47c90bce181' => 
    array (
      0 => 'F:\\www\\htdocs\\themes\\system\\msgbox.html',
      1 => 1321974606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26146508be6ffde4673-50301633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508be6ffeb8657_81569210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508be6ffeb8657_81569210')) {function content_508be6ffeb8657_81569210($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>系统提示！</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
* {margin: 0px; padding: 0px;}
body {background: #fff; font: 12px/23px Verdana, Arial, Helvetica, sans-serif;}
a {color: #be5050; text-decoration: none;}
a:hover {color: #f30; text-decoration: underline;}
.msgbox {border: solid 3px #be0a0a; margin: 80px auto 0px auto; width: 450px;}
.title {background: #be0a0a; color: #fff; font: bold 12px normal; padding: 7px;}
.content {background: #fff; color: #f30; padding: 15px;}
.link {background: #fee; border-top: solid 1px #fadddd; color: #be5050; line-height: 20px; padding: 3px; text-align: center;}
</style>
</head>

<body>
<div class="msgbox">
	<h2 class="title">系统提示！</h2>
    <div class="content"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
    <div class="link"><strong>系统 <span id="seconds" style="color: #f60;">2</span> 秒后将自动跳转</strong><br /><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">如果您的浏览器没有自动跳转，请点击这里...</a></div>
</div>
<script type="text/javascript">
var i = 2;
var retime = setInterval(function() {
	i = i - 1;
	if (i < 0){
		window.location.href= '<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
';
		window.clearInterval(retime);
		return;
	}
	document.getElementById("seconds").innerHTML = i;
}, 1000);
</script>
</body>
</html><?php }} ?>