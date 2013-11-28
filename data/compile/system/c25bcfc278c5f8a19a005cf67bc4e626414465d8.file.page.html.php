<?php /* Smarty version Smarty-3.1.10, created on 2013-11-29 00:46:18
         compiled from "/home/muzik/www/fdir/themes/system/page.html" */ ?>
<?php /*%%SmartyHeaderCode:14393756615297735a93a1e2-63803203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c25bcfc278c5f8a19a005cf67bc4e626414465d8' => 
    array (
      0 => '/home/muzik/www/fdir/themes/system/page.html',
      1 => 1385656849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14393756615297735a93a1e2-63803203',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'pagetitle' => 0,
    'fileurl' => 0,
    'keywords' => 0,
    'pages' => 0,
    'page' => 0,
    'showpage' => 0,
    'h_action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_5297735a9eb593_28987672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5297735a9eb593_28987672')) {function content_5297735a9eb593_28987672($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php if ($_smarty_tpl->tpl_vars['action']->value=='list'){?>
	<h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em><span><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?act=add">+添加新页面</a></span></h3>
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
			<input type="submit" class="btn" value="应用" onClick="if(IsCheck('page_id[]')==false){alert('请指定您要操作的页面ID！');return false;}else{return confirm('确认执行此操作吗？');}">
		</div>
                    
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th><input type="checkbox" id="ChkAll" onClick="CheckAll(this.form)"></th>
				<th>ID</th>
				<th>页面名称</th>
				<th>页面说明</th>
				<th>操作选项</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
			<tr>
				<td><input name="page_id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_id'];?>
"></td>
				<td><?php echo $_smarty_tpl->tpl_vars['page']->value['page_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['page']->value['page_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['page']->value['page_intro'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['page']->value['page_operate'];?>
</td>
			</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['page']->_loop) {
?>
			<tr><td colspan="5">无任何自定义页面！</td></tr>
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
				<th>页面名称：</th>
				<td><input name="page_name" type="text" class="ipt" id="page_name" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_name'];?>
" /></td>
			</tr>
			<tr>
				<th>页面说明：</th>
				<td><input name="page_intro" type="text" class="ipt" id="page_intro" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_intro'];?>
" /><span class="tips">页面说明，可不填写，字数限制在50个以内</span></td>
			</tr>
			<tr>
				<th>页面内容：</th>
				<td>
					<script type="text/javascript">
					var editor;
					KindEditor.ready(function(K) {
						editor = K.create('textarea[name="page_content"]', {
							resizeType : 1,
							allowPreviewEmoticons : false,
							allowImageUpload : false,
							items : [
								'source', '|', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
								'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
								'insertunorderedlist', '|', 'emoticons', 'link']
						});
					});
                    </script>
                    <textarea name="page_content" id="page_content" cols="50" rows="6" class="ipt" style="width: 550px; height: 350px; visibility: hidden;"><?php echo $_smarty_tpl->tpl_vars['page']->value['page_content'];?>
</textarea>
                </td>
			</tr>
			<tr class="btnbox">
            	<th>&nbsp;</th>
				<td>
					<input name="act" type="hidden" id="act" value="<?php echo $_smarty_tpl->tpl_vars['h_action']->value;?>
">
					<?php if ($_smarty_tpl->tpl_vars['action']->value=='edit'&&$_smarty_tpl->tpl_vars['page']->value['page_id']){?>
					<input name="page_id" type="hidden" id="page_id" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_id'];?>
">
					<?php }?>
					<input type="submit" class="btn" value="保 存">&nbsp;
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