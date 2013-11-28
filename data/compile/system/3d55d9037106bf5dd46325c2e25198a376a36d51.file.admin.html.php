<?php /* Smarty version Smarty-3.1.10, created on 2012-11-04 20:22:16
         compiled from "F:\www\htdocs\themes\system\admin.html" */ ?>
<?php /*%%SmartyHeaderCode:22470508be7071be901-32461804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d55d9037106bf5dd46325c2e25198a376a36d51' => 
    array (
      0 => 'F:\\www\\htdocs\\themes\\system\\admin.html',
      1 => 1352031726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22470508be7071be901-32461804',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508be70726f3d2_19098372',
  'variables' => 
  array (
    'pagetitle' => 0,
    'site_root' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508be70726f3d2_19098372')) {function content_508be70726f3d2_19098372($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
<link href="../themes/system/skin/global.css" rel="stylesheet" type="text/css" />
<link href="../themes/system/skin/iframe.css" rel="stylesheet" type="text/css" />
<link href="../public/scripts/jquery.treeview.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../public/scripts/jquery.min.js"></script>
<script type="text/javascript" src="../public/scripts/jquery.treeview.js"></script>
<script type="text/javascript">
$(document).ready(function(){  
    /*$("#main_frame").load(function(){
        $(this).height($(this).height() - $("#main_frame").offset().top - 10);    
    });
	*/
	$("#menu").treeview();
	
	var win_height = $(window).height() - $("#main_frame").offset().top - 5;
	$("#main_frame").height(win_height);
	$("#sidebar").css("height", win_height);
});
</script>
</head>

<body>
<div id="wrapper">
	<div id="header">
    	<a href="http://%77%77%77%2E%61%64%6D%69%6E%63%68%6E%2E%63%6F%6D/" target="_blank" id="logo"></a>
        <div id="link">
		<script language=javascript>
<!--
window["\x64\x6f\x63\x75\x6d\x65\x6e\x74"]["\x77\x72\x69\x74\x65\x6c\x6e"]("\u6280\u672f\u652f\u6301\uff1a\x3c\x61 \x68\x72\x65\x66\x3d\"\x68\x74\x74\x70\x3a\/\/\x77\x77\x77\x2e\x61\x64\x6d\x69\x6e\x63\x68\x6e\x2e\x63\x6f\x6d\/\" \x73\x74\x79\x6c\x65\x3d\"\x63\x6f\x6c\x6f\x72\x3a\x62\x6c\x75\x65\x3b\x66\x6f\x6e\x74\x2d\x77\x65\x69\x67\x68\x74\x3a \x62\x6f\x6c\x64\x3b\"  \x74\x61\x72\x67\x65\x74\x3d\"\x5f\x62\x6c\x61\x6e\x6b\"\x3e\u7ad9\u957f\u4e2d\u56fd\x3c\/\x61\x3e");
//-->
</script>| <a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
" target="_blank">预览网站</a> | <a href="main.php" target="main">管理首页</a> | <a href="cache.php" target="main">缓存管理</a> | <a href="editpwd.php" target="main">修改密码</a> | <a href="login.php?act=logout" onclick="return confirm('确认退出吗？');">注销登陆</a></div>
    </div>
    <div id="mainer">
    	<div id="mainer-left">
    		<div id="sidebar">
            	<ul id="menu" class="filetree">
                	<li>
                    	<span class="folder">系统设置</span>
                    	<ul>
                        	<li><a href="option.php?opt=basic" target="main"><span class="file">站点信息</span></a></li>
                            <li><a href="option.php?opt=misc" target="main"><span class="file">选项设置</span></a></li>
                            <li><a href="option.php?opt=user" target="main"><span class="file">注册设置</span></a></li>
                            <li><a href="option.php?opt=link" target="main"><span class="file">链接设置</span></a></li>
                            <li><a href="option.php?opt=mail" target="main"><span class="file">邮件设置</span></a></li>
                        </ul>
                    </li>
                    <li class="closed">
                    	<span class="folder">站点管理</span>
                    	<ul>
                        	<li><a href="category.php?mod=webdir" target="main"><span class="file">分类列表</span></a></li>
                            <li><a href="category.php?mod=webdir&act=reset" target="main"><span class="file">分类复位</span></a></li>
                            <li><a href="category.php?mod=webdir&act=merge" target="main"><span class="file">分类合并</span></a></li>
                            <li><a href="website.php" target="main"><span class="file">站点管理</span></a></li>
                            <li><a href="website.php?act=down" target="main"><span class="file">下载图片</span></a></li>
                            <li><a href="weblink.php" target="main"><span class="file">友链管理</span></a></li>
                        </ul>                    	
                    </li>
                    <li class="closed">
                    	<span class="folder">文章管理</span>
                    	<ul>
                        	<li><a href="category.php?mod=article" target="main"><span class="file">分类列表</span></a></li>
                            <li><a href="category.php?mod=article&act=reset" target="main"><span class="file">分类复位</span></a></li>
                            <li><a href="category.php?mod=article&act=merge" target="main"><span class="file">分类合并</span></a></li>
                            <li><a href="article.php" target="main"><span class="file">文章管理</span></a></li>
                        </ul>                    	
                    </li>
                    <li class="closed">
                    	<span class="folder">用户管理</span>
                    	<ul>
                        	<li><a href="user.php" target="main"><span class="file">注册会员</span></a></li>
                        </ul>                    	
                    </li>
                    <li class="closed">
                    	<span class="folder">辅助功能</span>
						<ul>
							<li><a href="adver.php" target="main"><span class="file">网站广告</span></a></li>
							<li><a href="link.php" target="main"><span class="file">友情链接</span></a></li>
                            <li><a href="feedback.php" target="main"><span class="file">意见反馈</span></a></li>
						</ul>                        
                    </li>
                    <li class="closed">
                    	<span class="folder">自定义管理</span>
						<ul>
							<li><a href="label.php" target="main"><span class="file">自定义标签</span></a></li>
							<li><a href="page.php" target="main"><span class="file">自定义页面</span></a></li>
						</ul>
                    </li>
                    <li class="closed">
                    	<span class="folder">数据库管理</span>
						<ul>
							<li><a href="database.php?act=backup" target="main"><span class="file">数据库备份</span></a></li>
							<li><a href="database.php?act=restore" target="main"><span class="file">数据库恢复</span></a></li>
							<li><a href="database.php?act=maintain" target="main"><span class="file">数据库维护</span></a></li>
							<li><a href="database.php?act=dbinfo" target="main"><span class="file">数据库信息</span></a></li>
						</ul>
                    </li>
                </ul>
            </div>
        </div>
        <div id="mainer-right">
        	<div id="content"><iframe id="main_frame" name="main" frameborder="0" src="main.php"></iframe></div>
        </div>
    </div>
</div>
</body>
</html><?php }} ?>