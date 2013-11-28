<?php /* Smarty version Smarty-3.1.10, created on 2012-11-25 12:26:01
         compiled from "/www/web/tool/public_html/themes/system/weblink.html" */ ?>
<?php /*%%SmartyHeaderCode:132262391550b19dd9e9c180-78389186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6d5a04dbd3a3134942fe4146d4463829649d1d3' => 
    array (
      0 => '/www/web/tool/public_html/themes/system/weblink.html',
      1 => 1353815528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132262391550b19dd9e9c180-78389186',
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
  'unifunc' => 'content_50b19dd9f15852_85456537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b19dd9f15852_85456537')) {function content_50b19dd9f15852_85456537($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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