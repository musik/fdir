<?php /* Smarty version Smarty-3.1.10, created on 2012-11-04 20:19:19
         compiled from "F:\www\htdocs\themes\system\editpwd.html" */ ?>
<?php /*%%SmartyHeaderCode:585550965d4711ae31-42342596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '422f32ccb9d0690fa783f00bf099c155cc8b1c16' => 
    array (
      0 => 'F:\\www\\htdocs\\themes\\system\\editpwd.html',
      1 => 1331218320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '585550965d4711ae31-42342596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagetitle' => 0,
    'fileurl' => 0,
    'myself' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_50965d471fa1b2_38018539',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50965d471fa1b2_38018539')) {function content_50965d471fa1b2_38018539($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em></h3>
	<div class="formbox">
       	<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th>电子邮箱：</th>
				<td><input name="user_email" type="text" class="ipt" id="user_email" size="30" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['myself']->value['user_email'];?>
" /></td>
			</tr>
			<tr>
				<th>原始密码：</th>
				<td><input name="user_pass" type="password" class="ipt" id="user_pass" size="30" maxlength="30" value="" /></td>
			</tr>
			<tr>
				<th>新 密 码：</th>
				<td><input name="new_pass" type="password" class="ipt" id="new_pass" size="30" maxlength="30" value="" /></td>
			</tr>
			<tr>
				<th>确认密码：</th>
				<td><input name="new_pass1" type="password" class="ipt" id="new_pass1" size="30" maxlength="30" value="" /></td>
			</tr>
			<tr class="btnbox">
            	<th>&nbsp;</th>
				<td>
                	<input name="user_id" type="hidden" id="user_id" value="<?php echo $_smarty_tpl->tpl_vars['myself']->value['user_id'];?>
">
					<input name="act" type="hidden" id="act" value="saveedit">
					<input type="submit" class="btn" value="确认修改">
				</td>
			</tr>
		</table>
        </form>
	</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>