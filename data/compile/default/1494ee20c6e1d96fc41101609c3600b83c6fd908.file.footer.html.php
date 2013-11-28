<?php /* Smarty version Smarty-3.1.10, created on 2012-11-25 19:07:47
         compiled from "/www/web/tool/public_html/themes/default/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:208689350450b196c098a789-83283837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1494ee20c6e1d96fc41101609c3600b83c6fd908' => 
    array (
      0 => '/www/web/tool/public_html/themes/default/footer.html',
      1 => 1353841663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208689350450b196c098a789-83283837',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_50b196c09ab022_44676564',
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b196c09ab022_44676564')) {function content_50b196c09ab022_44676564($_smarty_tpl) {?>    <div class="blank10"></div>
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