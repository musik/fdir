<?php /* Smarty version Smarty-3.1.10, created on 2013-11-29 01:28:17
         compiled from "/home/muzik/www/fdir/themes/default/siteinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:689931897529775d432f629-34138899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a75afe050a714bb424d3b80db98c71467b0c63b' => 
    array (
      0 => '/home/muzik/www/fdir/themes/default/siteinfo.html',
      1 => 1385659695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '689931897529775d432f629-34138899',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_529775d44b3b25_53693002',
  'variables' => 
  array (
    'site_title' => 0,
    'site_keywords' => 0,
    'site_description' => 0,
    'site_root' => 0,
    'web' => 0,
    'user' => 0,
    'web_tags' => 0,
    'item' => 0,
    'related_website' => 0,
    'rel' => 0,
    'art' => 0,
    'best' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529775d44b3b25_53693002')) {function content_529775d44b3b25_53693002($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['site_keywords']->value;?>
" />
<meta name="Description" content="<?php echo $_smarty_tpl->tpl_vars['site_description']->value;?>
" />
<meta name="Copyright" content="Powered By yzdir.com" />
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
        	<div id="siteinfo">
            	<h1 class="wtitle"><span style="float: right;"></span><a href="<?php echo $_smarty_tpl->tpl_vars['web']->value['web_furl'];?>
" target="_blank" onClick="clickout(<?php echo $_smarty_tpl->tpl_vars['web']->value['web_id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['web']->value['web_name'];?>
</a></h1>
				<ul class="wdata"><li class="line"><em style="color: #f00;"><?php echo $_smarty_tpl->tpl_vars['web']->value['web_views'];?>
</em>人气指数</li><li class="line"><em style="color: #083;"><?php echo $_smarty_tpl->tpl_vars['web']->value['web_grank'];?>
</em>PageRank</li><li class="line"><em style="color: #083;"><?php echo $_smarty_tpl->tpl_vars['web']->value['web_brank'];?>
</em>百度权重</li><li class="line"><em style="color: #083;"><?php echo $_smarty_tpl->tpl_vars['web']->value['web_srank'];?>
</em>Sogou Rank</li><li class="line"><em style="color: #083;"><?php echo $_smarty_tpl->tpl_vars['web']->value['web_arank'];?>
</em>AlexaRank</li><li class="line"><em><?php echo $_smarty_tpl->tpl_vars['web']->value['web_instat'];?>
</em>入站次数</li><li class="line"><em><?php echo $_smarty_tpl->tpl_vars['web']->value['web_outstat'];?>
</em>出站次数</li><li class="line"><em><?php echo $_smarty_tpl->tpl_vars['web']->value['web_ctime'];?>
</em>收录日期</li><li><em style="color: #f60;"><?php echo $_smarty_tpl->tpl_vars['web']->value['web_utime'];?>
</em>更新日期</li></ul>
				<div class="clearfix params">
					<a href="<?php echo $_smarty_tpl->tpl_vars['web']->value['web_furl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['web']->value['web_pic'];?>
" width="130" height="110" alt="<?php echo $_smarty_tpl->tpl_vars['web']->value['web_name'];?>
" class="wthumb" /></a>
					<ul class="siteitem">
						<li><strong>网站地址：</strong><a href="<?php echo $_smarty_tpl->tpl_vars['web']->value['web_furl'];?>
" target="_blank" class="visit" onClick="clickout(<?php echo $_smarty_tpl->tpl_vars['web']->value['web_id'];?>
)"><font color="#008000"><?php echo $_smarty_tpl->tpl_vars['web']->value['web_url'];?>
</font></a></li>
            			<li><strong>服务器IP：</strong><?php echo $_smarty_tpl->tpl_vars['web']->value['web_ip'];?>
</li>
                        <li><strong>网站描述：</strong><span style="line-height: 23px;"><?php echo $_smarty_tpl->tpl_vars['web']->value['web_intro'];?>
</span></li>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['user_qq']){?>
                        <li><strong>联系站长：</strong><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_qq'];?>
&amp;site=<?php echo $_smarty_tpl->tpl_vars['user']->value['nick_name'];?>
&amp;menu=yes" target="_blank"><img border="0" alt="点击这里给我发消息" src="http://wpa.qq.com/pa?p=2:<?php echo $_smarty_tpl->tpl_vars['user']->value['user_qq'];?>
:41"></a></li>
                        <?php }?>
                        <li><strong>TAG标签：</strong><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['web_tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['tag_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['tag_name'];?>
</a>　<?php } ?></li>
                        <li><?php echo get_adcode(1);?>
</li>
					</ul>
				</div>
            </div>
            <div class="blank10"></div>
        	<div id="relsite" class="clearfix">
            	<h2>相关站点</h2>
               	<ul class="rellist">
              		<?php  $_smarty_tpl->tpl_vars['rel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_website']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rel']->key => $_smarty_tpl->tpl_vars['rel']->value){
$_smarty_tpl->tpl_vars['rel']->_loop = true;
?>
               		<li><a href="<?php echo $_smarty_tpl->tpl_vars['rel']->value['web_link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['rel']->value['web_pic'];?>
" width="100" height="80" alt="<?php echo $_smarty_tpl->tpl_vars['rel']->value['web_name'];?>
" /><strong><?php echo $_smarty_tpl->tpl_vars['rel']->value['web_name'];?>
</strong></a></li>
               		<?php } ?>
              	</ul>
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
            <div id="bestweb">
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
" target="_blank" class="visit" onClick="clickout(<?php echo $_smarty_tpl->tpl_vars['best']->value['web_id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['best']->value['web_url'];?>
</a></address></li>
                   	<?php } ?>
               	</ul>
            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
?mod=getdata&type=ip&wid=<?php echo $_smarty_tpl->tpl_vars['web']->value['web_id'];?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
?mod=getdata&type=grank&wid=<?php echo $_smarty_tpl->tpl_vars['web']->value['web_id'];?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
?mod=getdata&type=brank&wid=<?php echo $_smarty_tpl->tpl_vars['web']->value['web_id'];?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
?mod=getdata&type=srank&wid=<?php echo $_smarty_tpl->tpl_vars['web']->value['web_id'];?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
?mod=getdata&type=arank&wid=<?php echo $_smarty_tpl->tpl_vars['web']->value['web_id'];?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
?mod=getdata&type=clink&wid=<?php echo $_smarty_tpl->tpl_vars['web']->value['web_id'];?>
"></script>
</body>
</html>
<?php }} ?>