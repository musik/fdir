<?php /* Smarty version Smarty-3.1.10, created on 2012-12-13 13:04:46
         compiled from "G:\PHPnow\vhosts\0581.info\themes\default\webdir.html" */ ?>
<?php /*%%SmartyHeaderCode:756350c961eecf7645-21865731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb630bfbd0ce82b7d29037304d3dbb5b352dd460' => 
    array (
      0 => 'G:\\PHPnow\\vhosts\\0581.info\\themes\\default\\webdir.html',
      1 => 1353846442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '756350c961eecf7645-21865731',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_title' => 0,
    'site_keywords' => 0,
    'site_description' => 0,
    'site_root' => 0,
    'cate_name' => 0,
    'categories' => 0,
    'sub' => 0,
    'websites' => 0,
    'w' => 0,
    'showpage' => 0,
    'art' => 0,
    'best' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_50c961ef1adf37_95656290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c961ef1adf37_95656290')) {function content_50c961ef1adf37_95656290($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['site_keywords']->value;?>
" />
<meta name="Description" content="<?php echo $_smarty_tpl->tpl_vars['site_description']->value;?>
" />
<meta name="Copyright" content="Powered By 35dir.com" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
themes/default/skin/style.css" rel="stylesheet" type="text/css" />
<?php echo $_smarty_tpl->getSubTemplate ("script.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("topbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="wrapper">
	<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div id="mainbox" class="clearfix">
    	<div id="mainbox-left">
        	<div id="subcate" class="clearfix">
            	<h3><?php echo $_smarty_tpl->tpl_vars['cate_name']->value;?>
</h3>
                <ul class="scatelist">
                	<?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value){
$_smarty_tpl->tpl_vars['sub']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['sub']->value['cate_mod']!='article'){?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['sub']->value['cate_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['sub']->value['cate_name'];?>
</a><em>(<?php echo $_smarty_tpl->tpl_vars['sub']->value['cate_postcount'];?>
)</em></li>
                    <?php }?>
                    <?php } ?>
                </ul>
            </div>
            <div class="blank10"></div>
            <div id="listbox" class="clearfix">
            	<h2><?php echo $_smarty_tpl->tpl_vars['cate_name']->value;?>
</h2>
            	<ul class="sitelist">
					<?php  $_smarty_tpl->tpl_vars['w'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['w']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['websites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['w']->key => $_smarty_tpl->tpl_vars['w']->value){
$_smarty_tpl->tpl_vars['w']->_loop = true;
?>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['w']->value['web_link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['w']->value['web_pic'];?>
" width="100" height="80" alt="<?php echo $_smarty_tpl->tpl_vars['w']->value['web_name'];?>
" class="thumb" /></a><div class="info"><h3><a href="<?php echo $_smarty_tpl->tpl_vars['w']->value['web_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['w']->value['web_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['w']->value['web_name'];?>
</a> <?php if ($_smarty_tpl->tpl_vars['w']->value['web_ispay']==1){?><img src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
public/images/attr/audit.gif" border="0"><?php }?> <?php if ($_smarty_tpl->tpl_vars['w']->value['web_istop']==1){?><img src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
public/images/attr/top.gif" border="0"><?php }?> <?php if ($_smarty_tpl->tpl_vars['w']->value['web_isbest']==1){?><img src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
public/images/attr/best.gif" border="0"><?php }?></h3><p><?php echo $_smarty_tpl->tpl_vars['w']->value['web_intro'];?>
</p><address><a href="<?php echo $_smarty_tpl->tpl_vars['w']->value['web_furl'];?>
" target="_blank" class="visit" onClick="clickout(<?php echo $_smarty_tpl->tpl_vars['w']->value['web_id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['w']->value['web_url'];?>
</a> - <?php echo $_smarty_tpl->tpl_vars['w']->value['web_ctime'];?>
 - <a href="javascript:;" class="addfav" onClick="addfav(<?php echo $_smarty_tpl->tpl_vars['w']->value['web_id'];?>
)" title="点击收藏">收藏</a></address></div></li>
                	<?php }
if (!$_smarty_tpl->tpl_vars['w']->_loop) {
?>
                	<li>该目录下无任何内容！</li>
                	<?php } ?>
				</ul>
            	<div class="showpage"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
            </div>
        </div>
        <div id="mainbox-right">
        	<div class="ad250x250"><?php echo get_adcode(7);?>
</div>
            <div class="blank10"></div>
            <div id="bestart">
            	<h3>推荐资讯</h3>
                <ul class="artlist_b">
                	<?php  $_smarty_tpl->tpl_vars['art'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['art']->_loop = false;
 $_from = get_articles(0,10); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['art']->key => $_smarty_tpl->tpl_vars['art']->value){
$_smarty_tpl->tpl_vars['art']->_loop = true;
?>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['art']->value['art_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['art']->value['art_title'];?>
</a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="blank10"></div>
            <div id="bestweb" class="mag">
            	<h3>推荐站点</h3>
                <ul class="weblist_b">
                   	<?php  $_smarty_tpl->tpl_vars['best'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['best']->_loop = false;
 $_from = get_websites(0,5,false,true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['best']->key => $_smarty_tpl->tpl_vars['best']->value){
$_smarty_tpl->tpl_vars['best']->_loop = true;
?>
                   	<li><a href="<?php echo $_smarty_tpl->tpl_vars['best']->value['web_link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['best']->value['web_pic'];?>
" width="100" height="80" alt="<?php echo $_smarty_tpl->tpl_vars['best']->value['web_name'];?>
" /></a><strong><a href="<?php echo $_smarty_tpl->tpl_vars['best']->value['web_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['best']->value['web_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['best']->value['web_name'];?>
</a></strong><p><?php echo $_smarty_tpl->tpl_vars['best']->value['web_intro'];?>
</p><address><a href="<?php echo $_smarty_tpl->tpl_vars['best']->value['web_furl'];?>
" target="_blank" class="visit" onclick="clickout(<?php echo $_smarty_tpl->tpl_vars['best']->value['web_id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['best']->value['web_url'];?>
</a></address></li>
                   	<?php } ?>
               	</ul>
            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html><?php }} ?>