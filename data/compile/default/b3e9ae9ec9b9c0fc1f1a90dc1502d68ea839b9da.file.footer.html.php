<?php /* Smarty version Smarty-3.1.10, created on 2013-11-29 00:44:41
         compiled from "/home/muzik/www/fdir/themes/default/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:363864893529772f9ed6051-61811208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3e9ae9ec9b9c0fc1f1a90dc1502d68ea839b9da' => 
    array (
      0 => '/home/muzik/www/fdir/themes/default/footer.html',
      1 => 1385656849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '363864893529772f9ed6051-61811208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_529772f9efd4b7_15765830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529772f9efd4b7_15765830')) {function content_529772f9efd4b7_15765830($_smarty_tpl) {?>    <div class="blank10"></div>
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