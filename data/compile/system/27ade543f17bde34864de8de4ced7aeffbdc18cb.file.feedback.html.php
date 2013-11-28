<?php /* Smarty version Smarty-3.1.10, created on 2012-11-25 12:28:54
         compiled from "/www/web/tool/public_html/themes/system/feedback.html" */ ?>
<?php /*%%SmartyHeaderCode:74152483850b19e8668a053-55473047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27ade543f17bde34864de8de4ced7aeffbdc18cb' => 
    array (
      0 => '/www/web/tool/public_html/themes/system/feedback.html',
      1 => 1353815525,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74152483850b19e8668a053-55473047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'pagetitle' => 0,
    'fileurl' => 0,
    'keywords' => 0,
    'feedback' => 0,
    'fb' => 0,
    'showpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_50b19e86724398_18787269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b19e86724398_18787269')) {function content_50b19e86724398_18787269($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
                   
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<div class="toolbar">
			<select name="act" id="act" class="sel">
			<option value="del" style="color: #FF0000;">删除选定</option>
			</select>
			<input type="submit" class="btn" value="应用" onClick="if(IsCheck('fb_id[]')==false){alert('请指定您要操作的意见ID！');return false;}else{return confirm('确认执行此操作吗？');}">
		</div>
                        
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th><input type="checkbox" id="ChkAll" onClick="CheckAll(this.form)"></th>
				<th>ID</th>
				<th>用户昵称</th>
				<th>电子邮件</th>
				<th>提交时间</th>
				<th>操作选项</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['fb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feedback']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fb']->key => $_smarty_tpl->tpl_vars['fb']->value){
$_smarty_tpl->tpl_vars['fb']->_loop = true;
?>
			<tr>
				<td><input name="fb_id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['fb']->value['fb_id'];?>
"></td>
				<td><?php echo $_smarty_tpl->tpl_vars['fb']->value['fb_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['fb']->value['fb_nick'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['fb']->value['fb_email'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['fb']->value['fb_date'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['fb']->value['fb_operate'];?>
</td>
			</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['fb']->_loop) {
?>
			<tr><td colspan="6">无任何反馈信息！</td></tr>
			<?php } ?>
		</table>
		</form>
        <div class="pagebox"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
	</div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['action']->value=='view'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em></h3>
    <div class="formbox">
		<form name="mform" method="post" action="">
        <table width="100%" border="0" cellspacing="1" cellpadding="0">
        	<tr>
            	<th>用户昵称：</th>
                <td><?php echo $_smarty_tpl->tpl_vars['fb']->value['fb_nick'];?>
</td>
            </tr>
            <tr>
            	<th>电子邮件：</th>
                <td><?php echo $_smarty_tpl->tpl_vars['fb']->value['fb_email'];?>
</td>
            </tr>
           	<tr>
            	<th>反馈内容：</th>
            	<td><?php echo $_smarty_tpl->tpl_vars['fb']->value['fb_content'];?>
</td>
            </tr>
            <tr>
            	<th>提交时间：</th>
            	<td><?php echo $_smarty_tpl->tpl_vars['fb']->value['fb_date'];?>
</td>
            </tr>
            <tr class="btnbox">
            	<th>&nbsp;</th>
            	<td>
                	<input type="button" class="btn" value="删 除" onclick="if (confirm('确认删除此内容吗？')) { window.location.href='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
&act=del&fb_id=<?php echo $_smarty_tpl->tpl_vars['fb']->value['fb_id'];?>
'}">&nbsp;
                	<input type="button" class="btn" value="返回列表" onClick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
';">
                </td>
            </tr>
         </table>
         </form>
	</div>
    <?php }?>              

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>