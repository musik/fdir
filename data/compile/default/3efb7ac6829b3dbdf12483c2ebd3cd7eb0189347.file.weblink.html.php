<?php /* Smarty version Smarty-3.1.10, created on 2012-12-09 02:24:57
         compiled from "D:\site\aifang\themes\default\weblink.html" */ ?>
<?php /*%%SmartyHeaderCode:2532350c385f96dec11-79334515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3efb7ac6829b3dbdf12483c2ebd3cd7eb0189347' => 
    array (
      0 => 'D:\\site\\aifang\\themes\\default\\weblink.html',
      1 => 1353846442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2532350c385f96dec11-79334515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_title' => 0,
    'site_keywords' => 0,
    'site_description' => 0,
    'site_root' => 0,
    'pagename' => 0,
    'weblinks' => 0,
    'item' => 0,
    'showpage' => 0,
    'art' => 0,
    'best' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_50c385f999eb09_78491776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c385f999eb09_78491776')) {function content_50c385f999eb09_78491776($_smarty_tpl) {?><!DOCTYPE HTML>
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
            <div id="listbox" class="clearfix">
            	<h2><?php echo $_smarty_tpl->tpl_vars['pagename']->value;?>
</h2>
            	<table border="0" cellpadding="0" cellspacing="1" width="100%" class="weblink">
                	<tr>
                    	<th>交易方式</th>
                    	<th>网站名称</th>
                        <th>网站域名</th>
                        <th>所属分类</th>
                        <th>谷歌PR</th>
                        <th>百度权重</th>
                        <th>Alexa排名</th>
                        <th>更新时间</th>
                        <th>联系站长</th>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['weblinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <tr style="text-align: center;">
                    	<td><?php echo $_smarty_tpl->tpl_vars['item']->value['deal_type'];?>
</td>
                    	<td><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['web_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['link_name'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['web_url'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['cate_name'];?>
</td>
                        <td><img src="public/images/gpr/<?php echo $_smarty_tpl->tpl_vars['item']->value['web_grank'];?>
.gif"></td>
                        <td><img src="public/images/bpr/<?php echo $_smarty_tpl->tpl_vars['item']->value['web_brank'];?>
.gif"></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['web_arank'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['link_time'];?>
</td>
                        <td><a href="tencent://message/?uin=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_qq'];?>
&site=<?php echo $_smarty_tpl->tpl_vars['item']->value['web_url'];?>
&menu=yes"><img src="http://wpa.qq.com/pa?p=1:<?php echo $_smarty_tpl->tpl_vars['item']->value['user_qq'];?>
:4" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['user_qq'];?>
"/></a></td>
                    </tr>
                    <?php } ?>
                </table>
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