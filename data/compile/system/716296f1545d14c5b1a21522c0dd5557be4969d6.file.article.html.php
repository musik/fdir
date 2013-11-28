<?php /* Smarty version Smarty-3.1.10, created on 2012-12-09 02:31:56
         compiled from "D:\site\aifang\themes\system\article.html" */ ?>
<?php /*%%SmartyHeaderCode:2105150c3879ca1f1c3-64195951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '716296f1545d14c5b1a21522c0dd5557be4969d6' => 
    array (
      0 => 'D:\\site\\aifang\\themes\\system\\article.html',
      1 => 1353846456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2105150c3879ca1f1c3-64195951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'pagetitle' => 0,
    'fileurl' => 0,
    'keywords' => 0,
    'cate_id' => 0,
    'sort' => 0,
    'order' => 0,
    'key_url' => 0,
    'status' => 0,
    'category_option' => 0,
    'articles' => 0,
    'item' => 0,
    'showpage' => 0,
    'row' => 0,
    'ispay' => 0,
    'istop' => 0,
    'isbest' => 0,
    'h_action' => 0,
    'art' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_50c3879d0596c1_61914442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c3879d0596c1_61914442')) {function content_50c3879d0596c1_61914442($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php if ($_smarty_tpl->tpl_vars['action']->value=='list'){?>
	<h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em><span><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?act=add">+添加文章</a></span></h3>
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
            <option value="move" style="color: #06c;">移动内容</option>
            <option value="attr" style="color: #f60;">属性设置</option>
			</select>
			<input type="submit" class="btn" value="应用" onClick="if(IsCheck('art_id[]')==false){alert('请指定您要操作的文章ID！');return false;}else{return confirm('确认执行此操作吗？');}">
			<select class="sel" onChange="if(this.options[this.selectedIndex].value!=''){location='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?status='+this.options[this.selectedIndex].value+'&cate_id=<?php echo $_smarty_tpl->tpl_vars['cate_id']->value;?>
&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
<?php echo $_smarty_tpl->tpl_vars['key_url']->value;?>
';}">
			<option value="0">所有状态</option>
			<option value="1" style="color: #333;"<?php echo opt_selected($_smarty_tpl->tpl_vars['status']->value,1);?>
>草稿</option>
			<option value="2" style="color: #f30;"<?php echo opt_selected($_smarty_tpl->tpl_vars['status']->value,2);?>
>待审核</option>
			<option value="3" style="color: #080;"<?php echo opt_selected($_smarty_tpl->tpl_vars['status']->value,3);?>
>已审核</option>
			</select>
			<select class="sel" onChange="if(this.options[this.selectedIndex].value!=''){location='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?status=<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
&cate_id='+this.options[this.selectedIndex].value+'&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
<?php echo $_smarty_tpl->tpl_vars['key_url']->value;?>
';}">
			<option value="0" selected>所有分类</option>
			<?php echo $_smarty_tpl->tpl_vars['category_option']->value;?>

			</select>
			<select class="sel" onChange="if(this.options[this.selectedIndex].value!=''){location='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?status=<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
&cate_id=<?php echo $_smarty_tpl->tpl_vars['cate_id']->value;?>
&sort='+this.options[this.selectedIndex].value+'<?php echo $_smarty_tpl->tpl_vars['key_url']->value;?>
';}">
			<option value="1"<?php echo opt_selected($_smarty_tpl->tpl_vars['sort']->value,1);?>
>按时间排列</option>
			<option value="2"<?php echo opt_selected($_smarty_tpl->tpl_vars['sort']->value,2);?>
>按浏览排列</option>
			</select>
			<select class="sel" onChange="if(this.options[this.selectedIndex].value!=''){location='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?status=<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
&cate_id=<?php echo $_smarty_tpl->tpl_vars['cate_id']->value;?>
&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
&order='+this.options[this.selectedIndex].value+'<?php echo $_smarty_tpl->tpl_vars['key_url']->value;?>
';}">
			<option value="DESC"<?php echo opt_selected($_smarty_tpl->tpl_vars['order']->value,'DESC');?>
>降序</option>
			<option value="ASC"<?php echo opt_selected($_smarty_tpl->tpl_vars['order']->value,'ASC');?>
>升序</option>
			</select>
		</div>
                    
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th><input type="checkbox" id="ChkAll" onClick="CheckAll(this.form)"></th>
				<th>ID</th>
				<th>所属分类</th>
				<th>文章标题</th>
                <th>浏览次数</th>
                <th>属性状态</th>
				<th>操作选项</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><input name="art_id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
"></td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['cate_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['art_title'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['art_views'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['art_attr'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['art_operate'];?>
</td>
			</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
			<tr><td colspan="7">无任何文章！</td></tr>
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
				<th>所属分类：</th>
				<td><select name="cate_id" id="cate_id" class="sel"><?php echo $_smarty_tpl->tpl_vars['category_option']->value;?>
</select></td>
			</tr>
			<tr>
				<th>文章标题：</th>
				<td><input name="art_title" type="text" class="ipt" id="art_title" size="50" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['art_title'];?>
" /></td>
			</tr>
			<tr>
				<th>TAG标签：</th>
				<td><input name="art_tags" type="text" class="ipt" id="art_tags" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['art_tags'];?>
" onBlur="javascript:this.value=this.value.replace(/，/ig,',');" /><span class="tips">多个标签用英文的“,”逗号隔开</span></td>
			</tr>
			<tr>
				<th>内容来源：</th>
				<td><input name="copy_from" type="text" class="ipt" id="copy_from" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['copy_from'];?>
" /><span class="tips">如: 汉狐网</span></td>
			</tr>
			<tr>
				<th>来源地址：</th>
				<td><input name="copy_url" type="text" class="ipt" id="copy_url" size="50" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['copy_url'];?>
" /><span class="tips">如: http://www.hanfox.com/</span></td>
			</tr>
			<tr>
				<th valign="top">内容摘要：</th>
				<td><textarea name="art_intro" cols="55" rows="5" class="ipt" id="art_intro"><?php echo $_smarty_tpl->tpl_vars['row']->value['art_intro'];?>
</textarea><span class="tips">不得超过200个中文字符，包括标点符号</span></td>
			</tr>
			<tr>
				<th>文章内容：</th>
				<td>
					<script type="text/javascript">
					var editor;
					KindEditor.ready(function(K) {
						editor = K.create('textarea[name="art_content"]', {
							resizeType : 1,
							allowPreviewEmoticons : false,
							allowImageUpload : true,
							uploadJson : 'upload.php?act=upload',
							items : [
								'source', '|', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
								'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
								'insertunorderedlist', '|', 'emoticons', 'image', 'link', '|', 'fullscreen']
						});
					});
                    </script>
                    <textarea name="art_content" id="art_content" cols="50" rows="6" class="ipt" style="width: 600px; height: 400px; visibility: hidden;"><?php echo $_smarty_tpl->tpl_vars['row']->value['art_content'];?>
</textarea>
                </td>
			</tr>
 			<tr>
				<th>浏览次数：</th>
				<td><input name="art_views" type="text" class="ipt" id="art_views" size="10" maxlength="10" value="<?php echo !$_smarty_tpl->tpl_vars['row']->value['art_views'] ? '0' : $_smarty_tpl->tpl_vars['row']->value['art_views'];?>
" /> 次</td>
			</tr>
			<tr>
				<th>属性设置：</th>
				<td><input name="art_ispay" type="checkbox" id="art_ispay" value="1"<?php echo opt_checked($_smarty_tpl->tpl_vars['ispay']->value,1);?>
 /><label for="art_ispay">付费</label>　<input name="art_istop" type="checkbox" id="art_istop" value="1"<?php echo opt_checked($_smarty_tpl->tpl_vars['istop']->value,1);?>
 /><label for="art_istop">置顶</label>　<input name="art_isbest" type="checkbox" id="art_isbest" value="1"<?php echo opt_checked($_smarty_tpl->tpl_vars['isbest']->value,1);?>
 /><label for="art_isbest">推荐</label></td>
			</tr>
			<tr>
				<th>审核状态：</th>
				<td><select name="art_status" id="art_status" class="sel"><option value="1" style="color: #333;"<?php echo opt_selected($_smarty_tpl->tpl_vars['status']->value,1);?>
>草稿</option><option value="2" style="color: #f30;"<?php echo opt_selected($_smarty_tpl->tpl_vars['status']->value,2);?>
>待审核</option><option value="3" style="color: #080;"<?php echo opt_selected($_smarty_tpl->tpl_vars['status']->value,3);?>
>已审核</option></select></td>
			</tr>
			<tr class="btnbox">
            	<th>&nbsp;</th>
				<td>
					<input name="act" type="hidden" id="act" value="<?php echo $_smarty_tpl->tpl_vars['h_action']->value;?>
">
					<?php if ($_smarty_tpl->tpl_vars['action']->value=='edit'&&$_smarty_tpl->tpl_vars['row']->value['art_id']){?>
					<input name="art_id" type="hidden" id="art_id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['art_id'];?>
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
    
	<?php if ($_smarty_tpl->tpl_vars['action']->value=='move'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em><span><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">返回列表&raquo;</a></span></h3>
	<div class="formbox">
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th valign="top">已选定的内容：</th>
				<td><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
&act=edit&art_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['art_title'];?>
</a><input name="art_id[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['art']->value['art_id'];?>
"><br /><?php } ?></td>
			</tr>
			<tr>
				<th>将以上内容移动至：</th>
				<td><select name="cate_id" id="cate_id" class="sel"><?php echo $_smarty_tpl->tpl_vars['category_option']->value;?>
</select></td>
			</tr>
			<tr class="btnbox">
            	<th>&nbsp;</th>
				<td>
					<input name="act" type="hidden" id="act" value="<?php echo $_smarty_tpl->tpl_vars['h_action']->value;?>
">
					<input type="submit" class="btn" value="保 存">&nbsp;
					<input type="reset" class="btn" value="取 消" onClick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
';">
				</td>
			</tr>
		</table>
		</form>
	</div>
	<?php }?>
    
	<?php if ($_smarty_tpl->tpl_vars['action']->value=='attr'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em><span><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">返回列表&raquo;</a></span></h3>
	<div class="formbox">
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th valign="top">已选定的内容：</th>
				<td><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
 - <a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
&act=edit&art_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['art_title'];?>
</a><input name="art_id[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
"><br /><?php } ?></td>
			</tr>
			<tr>
				<th>属性设置：</th>
				<td><input name="art_ispay" type="checkbox" id="art_ispay" value="1" /><label for="art_ispay">付费</label> <input name="art_istop" type="checkbox" id="art_istop" value="1" /><label for="art_istop">置顶</label>　<input name="art_isbest" type="checkbox" id="art_isbest" value="1" /><label for="art_isbest">推荐</label></td>
			</tr>
			<tr>
				<th>审核状态：</th>
				<td><select name="art_status" id="art_status" class="sel"><option value="1" style="color: #333;">草稿</option><option value="2" style="color: #f30;">待审核</option><option value="3" selected="selected" style="color: #080;">已审核</option></select></td>
			</tr>
			<tr class="btnbox">
            	<th>&nbsp;</th>
				<td colspan="2">
				<input name="act" type="hidden" id="act" value="<?php echo $_smarty_tpl->tpl_vars['h_action']->value;?>
">
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