<?php /* Smarty version Smarty-3.1.10, created on 2013-11-29 00:50:48
         compiled from "/home/muzik/www/fdir/themes/member/login.html" */ ?>
<?php /*%%SmartyHeaderCode:1004113938529774688cbab1-82049714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3190782575c338a5bab931cf3a581883d1ae37c1' => 
    array (
      0 => '/home/muzik/www/fdir/themes/member/login.html',
      1 => 1385656849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1004113938529774688cbab1-82049714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_title' => 0,
    'site_keywords' => 0,
    'site_description' => 0,
    'site_root' => 0,
    'cfg' => 0,
    'site_url' => 0,
    'site_name' => 0,
    'site_copyright' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_5297746892d362_43166810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5297746892d362_43166810')) {function content_5297746892d362_43166810($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['site_keywords']->value;?>
">
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['site_description']->value;?>
">
<script type="text/javascript">var sitepath = '<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
'; var rewrite = '<?php echo $_smarty_tpl->tpl_vars['cfg']->value['is_enabled_rewrite'];?>
';</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
public/scripts/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
public/scripts/common.js"></script>
<link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
themes/member/skin/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper">
    <div id="header">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" class="logo"></a>
        <div id="toplink">还没有帐号？ <a href="?mod=register">去注册一个&raquo;</a></div>
    </div>
	<div id="loginform">
    	<h2>已经是<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
会员，我要登录</h2>
        <form name="myform" method="post" action="">
        <ul>
        	<li><label>电子邮箱：</label><input type="text" name="email" size="30" maxlength="50" class="ipt" /></li>
            <li><label>登录密码：</label><input type="password" name="pass" size="30" maxlength="50" class="ipt" /></li>
            <li><label>&nbsp;</label><input type="hidden" name="action" value="login" /><input type="submit" value="登 录" class="btn" />　<a href="?mod=getpwd">忘记登录密码？</a></li>
            <li style="border-top: solid 1px #dadada;"><label>&nbsp;</label><a href="?mod=connect&oper=init"><img src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
public/images/qq_login.png" /></a></li>
        </ul>
        </form>
	</div>
    <div id="footer" class="clearfix">
    	<?php echo $_smarty_tpl->tpl_vars['site_copyright']->value;?>

    </div>
</div>
</body>
</html><?php }} ?>