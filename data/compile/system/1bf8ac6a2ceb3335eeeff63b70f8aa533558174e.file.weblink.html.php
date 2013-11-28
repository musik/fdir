<?php /* Smarty version Smarty-3.1.10, created on 2012-12-13 13:20:36
         compiled from "G:\PHPnow\vhosts\0581.info\themes\system\weblink.html" */ ?>
<?php /*%%SmartyHeaderCode:556550c965a4d6eb20-47302512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bf8ac6a2ceb3335eeeff63b70f8aa533558174e' => 
    array (
      0 => 'G:\\PHPnow\\vhosts\\0581.info\\themes\\system\\weblink.html',
      1 => 1353846460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '556550c965a4d6eb20-47302512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'pagetitle' => 0,
    'fileurl' => 0,
    'keywords' => 0,
    'weblinks' => 0,
    'link' => 0,
    'showpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_50c965a5015284_66930847',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c965a5015284_66930847')) {function content_50c965a5015284_66930847($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php if ($_smarty_tpl->tpl_vars['action']->value=='list'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em></h3>
    <div class="listbox">
        <form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
        <div class="search">
        	<input name="keywords" type="text" id="keywords" class="ipt" size="30" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
        	<input type="submit" class="btn" value="搜索" />
        </div>
        </form>
        
        <form name="mform" method="post" action="">
        <div class="toolbar">
			<select name="act" id="act" class="sel">
			<option value="del" style="color: #FF0000;">删除选定</option>
			</select>
			<input type="submit" class="btn" value="应用" onClick="if(IsCheck('link_id[]')==false){alert('请指定您要操作的链接ID！');return false;}else{return confirm('确认执行此操作吗？');}">
        </div>
        
    	<table width="100%" border="0" cellspacing="1" cellpadding="0">
    		<tr>
				<th><input type="checkbox" id="ChkAll" onClick="CheckAll(this.form)"></th>
				<th>ID</th>
                <th>所属分类</th>
                <th>交易方式</th>
				<th>链接名称</th>
				<th>链接地址</th>
				<th>发布时间</th>
                <th>操作选项</th>
    		</tr>
            <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['weblinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
    		<tr>
				<td><input name="link_id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['link']->value['link_id'];?>
"></td>
				<td><?php echo $_smarty_tpl->tpl_vars['link']->value['link_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['link']->value['cate_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['link']->value['deal_type'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['link']->value['link_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['link']->value['web_url'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['link']->value['link_time'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['link']->value['link_operate'];?>
</td>
    		</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['link']->_loop) {
?>
			<tr><td colspan="8">无任何友情链接！</td></tr>
			<?php } ?>
		</table>
        </form>
        <div class="pagebox"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
    </div>
    <?php }?>
    
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>