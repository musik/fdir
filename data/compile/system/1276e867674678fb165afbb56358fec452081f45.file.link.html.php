<?php /* Smarty version Smarty-3.1.10, created on 2012-12-13 13:18:25
         compiled from "G:\PHPnow\vhosts\0581.info\themes\system\link.html" */ ?>
<?php /*%%SmartyHeaderCode:1895250c96521149208-59382320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1276e867674678fb165afbb56358fec452081f45' => 
    array (
      0 => 'G:\\PHPnow\\vhosts\\0581.info\\themes\\system\\link.html',
      1 => 1353846458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1895250c96521149208-59382320',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'pagetitle' => 0,
    'fileurl' => 0,
    'keywords' => 0,
    'links' => 0,
    'link' => 0,
    'showpage' => 0,
    'display' => 0,
    'h_action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_50c965213cec53_60402453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c965213cec53_60402453')) {function content_50c965213cec53_60402453($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php if ($_smarty_tpl->tpl_vars['action']->value=='list'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em><span><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?act=add">+添加新链接</a></span></h3>
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
				<th>网站名称</th>
				<th>链接地址</th>
				<th>是否可见</th>
				<th>排列顺序</th>
                <th>操作选项</th>
    		</tr>
            <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
    		<tr>
				<td><input name="link_id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['link']->value['link_id'];?>
"></td>
				<td><?php echo $_smarty_tpl->tpl_vars['link']->value['link_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['link']->value['link_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['link']->value['link_url'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['link']->value['link_hide'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['link']->value['link_order'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['link']->value['link_operate'];?>
</td>
    		</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['link']->_loop) {
?>
			<tr><td colspan="7">无任何链接！</td></tr>
			<?php } ?>
		</table>
        </form>
        <div class="pagebox"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
    </div>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['action']->value=='add'||$_smarty_tpl->tpl_vars['action']->value=='edit'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em><span><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">返回列表&raquo;</a></span></h3>
    <div class="formbox">
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th>网站名称：</th>
				<td><input name="link_name" type="text" class="ipt" id="link_name" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['link']->value['link_name'];?>
" /></td>
			</tr>
			<tr>
				<th>网站地址：</th>
				<td><input name="link_url" type="text" class="ipt" id="link_url" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['link']->value['link_url'];?>
" /></td>
			</tr>
			<tr>
				<th>图标地址：</th>
				<td><input name="link_logo" type="text" class="ipt" id="link_logo" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['link']->value['link_logo'];?>
" /></td>
			</tr>
			<tr>
				<th>是否显示：</th>
				<td><input name="link_hide" type="radio" id="link_hide1" value="1"<?php echo opt_checked($_smarty_tpl->tpl_vars['display']->value,1);?>
><label for="link_hide1">显示</label>　<input name="link_hide" type="radio" id="link_hide2" value="2"<?php echo opt_checked($_smarty_tpl->tpl_vars['display']->value,2);?>
><label for="link_hide2">隐藏</label></td>
			</tr>
			<tr>
				<th>排列顺序：</th>
				<td><input name="link_order" type="text" class="ipt" id="link_order" size="10" maxlength="3" value="<?php echo !$_smarty_tpl->tpl_vars['link']->value['link_order'] ? '0' : $_smarty_tpl->tpl_vars['link']->value['link_order'];?>
" /></td>
			</tr>
			<tr class="btnbox">
            	<th>&nbsp;</th>
				<td>
					<input name="act" type="hidden" id="act" value="<?php echo $_smarty_tpl->tpl_vars['h_action']->value;?>
">
					<?php if ($_smarty_tpl->tpl_vars['action']->value=='edit'&&$_smarty_tpl->tpl_vars['link']->value['link_id']){?>
					<input name="link_id" type="hidden" id="link_id" value="<?php echo $_smarty_tpl->tpl_vars['link']->value['link_id'];?>
">
					<?php }?>
					<input type="submit" class="btn" value="保 存">
					<input type="reset" class="btn" value="取 消" onClick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
';">
				</td>
			</tr>
		</table>
        </form>
	</div>           
	<?php }?>
    
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>