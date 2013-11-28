<?php /* Smarty version Smarty-3.1.10, created on 2012-11-04 20:50:15
         compiled from "F:\www\htdocs\themes\default\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:31782508bdf435441e3-35465497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd89e3363da6aed9fa492ef05b2683ad29e624111' => 
    array (
      0 => 'F:\\www\\htdocs\\themes\\default\\footer.html',
      1 => 1352033404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31782508bdf435441e3-35465497',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_508bdf4358e442_42861089',
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508bdf4358e442_42861089')) {function content_508bdf4358e442_42861089($_smarty_tpl) {?>    <div class="blank10"></div>
    <div id="footer">
    	<div id="fmenu"><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = get_pages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['page_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['page_name'];?>
</a> | <?php } ?><a href="">最新收录</a> | <a href="">数据归档</a> | <a href="">TOP排行榜</a> | <a href="">站点地图</a> | <script language=javascript>
<!--
window["\x64\x6f\x63\x75\x6d\x65\x6e\x74"]["\x77\x72\x69\x74\x65\x6c\x6e"]("\x3c\x61 \x68\x72\x65\x66\x3d\"\x68\x74\x74\x70\x3a\/\/\x77\x77\x77\x2e\x61\x64\x6d\x69\x6e\x63\x68\x6e\x2e\x63\x6f\x6d\/\" \x73\x74\x79\x6c\x65\x3d\"\x63\x6f\x6c\x6f\x72\x3a\x72\x65\x64\x3b\x66\x6f\x6e\x74\x2d\x77\x65\x69\x67\x68\x74\x3a \x62\x6f\x6c\x64\x3b\"  \x74\x61\x72\x67\x65\x74\x3d\"\x5f\x62\x6c\x61\x6e\x6b\"\x3e\u7ad9\u957f\u4e2d\u56fd\x3c\/\x61\x3e");
//-->
</script></div>
		<div id="fcopy"><?php echo insert_script_time(array(),$_smarty_tpl);?>
<br /></div>
    </div><?php }} ?>