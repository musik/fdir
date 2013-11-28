<?php /* Smarty version Smarty-3.1.10, created on 2012-12-13 13:04:25
         compiled from "G:\PHPnow\vhosts\0581.info\themes\default\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:575650c961d911a623-42072514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ded774d0db718d8d70a94d68e3fc924a43b9be3' => 
    array (
      0 => 'G:\\PHPnow\\vhosts\\0581.info\\themes\\default\\footer.html',
      1 => 1353846440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '575650c961d911a623-42072514',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_50c961d916cd65_27121754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c961d916cd65_27121754')) {function content_50c961d916cd65_27121754($_smarty_tpl) {?>    <div class="blank10"></div>
    <div id="footer">
    	<div id="fmenu"><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = get_pages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['page_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['page_name'];?>
</a> | <?php } ?><a href="?mod=update">最新收录</a> | <a href="?mod=archives">数据归档</a> | <a href="?mod=top">TOP排行榜</a> | <a href="?mod=sitemap">站点地图</a></div>
		<div id="fcopy"><?php echo insert_script_time(array(),$_smarty_tpl);?>
</div>
    </div><?php }} ?>