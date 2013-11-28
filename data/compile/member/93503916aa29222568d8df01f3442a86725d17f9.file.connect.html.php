<?php /* Smarty version Smarty-3.1.10, created on 2012-11-25 19:29:50
         compiled from "/www/web/tool/public_html/themes/member/connect.html" */ ?>
<?php /*%%SmartyHeaderCode:100231869750b2012e279871-07786322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93503916aa29222568d8df01f3442a86725d17f9' => 
    array (
      0 => '/www/web/tool/public_html/themes/member/connect.html',
      1 => 1353815505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100231869750b2012e279871-07786322',
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
    'nick_name' => 0,
    'open_id' => 0,
    'site_copyright' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_50b2012e2dcf34_76217766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b2012e2dcf34_76217766')) {function content_50b2012e2dcf34_76217766($_smarty_tpl) {?><!DOCTYPE html>
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
themes/member/skin/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
themes/member/skin/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper">
    <div id="header">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" class="logo"></a>
        <div id="toplink"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
?mod=index">返回首页&raquo;</a></div>
    </div>
	<div id="regform" class="clearfix">
      	<h2>欢迎注册成为<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
会员！</h2>
        <div style="font: bold 14px normal; padding-left: 250px; padding-top: 30px;"><input type="radio" name="radio" id="radio_1" checked onClick="$('#form1').show(); $('#form2').hide();" /><label for="radio_1">我还未注册</label>　　<input type="radio" name="radio" id="radio_2" onClick="$('#form1').hide(); $('#form2').show();" /><label for="radio_2">已经注册过</label></div>
        <div id="form1">
        	<form name="form1" method="post" action="?mod=register">
        	<ul>
           		<li><label><font color="#FF0000">*</font> 电子邮箱：</label><input type="text" name="email" size="40" maxlength="50" class="ipt" /><p>登录账户、找回密码时使用</p></li>
            	<li><label><font color="#FF0000">*</font> 帐号密码：</label><input type="password" name="pass" size="40" maxlength="50" class="ipt" /><p>6~20个字符，区分大小写</p></li>
            	<li><label><font color="#FF0000">*</font> 确认密码：</label><input type="password" name="pass1" size="40" maxlength="50" class="ipt" /><p>同上</p></li>
            	<li><label><font color="#FF0000">*</font> 昵 称：</label><input type="text" name="nick" size="40" maxlength="20" class="ipt" value="<?php echo $_smarty_tpl->tpl_vars['nick_name']->value;?>
" /><p>我们对您的称呼</p></li>
            	<li><label><font color="#FF0000">*</font> 腾讯QQ：</label><input type="text" name="qq" size="40" maxlength="20" class="ipt" /><p>站长相互联系</p></li>
            	<li><label><font color="#FF0000">*</font> 验 证 码：</label><input type="text" name="code" size="10" maxlength="6" class="ipt" onFocus="refreshimg('mycode');" /><span id="mycode"></span><p>点击输入框即可显示验证码</p></li>
            	<li><label>&nbsp;</label><input type="hidden" name="open_id" id="open_id" value="<?php echo $_smarty_tpl->tpl_vars['open_id']->value;?>
"><input type="hidden" name="action" value="register"><input type="submit" value="绑定帐号" class="btn" /></li>
        	</ul>
        </form>
        </div>
        
        <div id="form2" style="display: none;">
        	<form name="form2" id="form2" method="post" action="?mod=login">
        	<ul>
        		<li><label>电子邮箱：</label><input type="text" name="email" size="30" maxlength="50" class="ipt" /></li>
            	<li><label>登录密码：</label><input type="password" name="pass" size="30" maxlength="50" class="ipt" /></li>
            	<li><label>&nbsp;</label><input type="hidden" name="open_id" id="open_id" value="<?php echo $_smarty_tpl->tpl_vars['open_id']->value;?>
"><input type="hidden" name="action" value="login" /><input type="submit" value="绑定帐号" class="btn" /></li>
        	</ul>
        	</form>
        </div>
    </div>
    <div id="footer" class="clearfix">
    	<?php echo $_smarty_tpl->tpl_vars['site_copyright']->value;?>

    </div>
</div>
</body>
</html><?php }} ?>