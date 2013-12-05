<?php
if (!defined('IN_HANFOX')) exit('Access Denied');

$pagename = '网站提交入口/网址提交';
$pageurl = '?mod=submit';
$tempfile = 'submit.html';
$table = $DB->table('websites');

if ($_POST['do'] == 'create') {
  $cate_id = intval($_POST['cate_id']);
  $web_name = trim($_POST['web_name']);
  $web_url = trim($_POST['web_url']);
  $web_tags = trim($_POST['web_tags']);
  $web_intro = trim($_POST['web_intro']);
  $web_ip = trim($_POST['web_ip']);
  $web_grank = intval($_POST['web_grank']);
  $web_brank = intval($_POST['web_brank']);
  $web_srank = intval($_POST['web_srank']);
  $web_arank = intval($_POST['web_arank']);
  $web_time = time();

  if ($cate_id <= 0) {
    msgbox('请选择网站所属分类！');
  } else {
    $cate = get_one_category($cate_id);
    if ($cate['cate_childcount'] > 0) {
      msgbox('指定的分类下有子分类，请选择子分类进行操作！');
    }
  }

  if (empty($web_name)) {
    msgbox('请输入网站名称！');
  } else {
    if (!censor_words($options['filter_words'], $web_name)) {
      msgbox('网站名称中含有非法关键词！');	
    }
  }

  if (empty($web_url)) {
    msgbox('请输入网站域名！');
  } else {
    if(substr($web_url,0,7) == 'http://')
      $web_url = substr($web_url,7,strlen($web_url) - 7);
    if(substr($web_url,-1,1) == '/')
      $web_url = substr($web_url,0,strlen($web_url) - 1);
    if (!is_valid_domain($web_url)) {
      msgbox('请输入正确的网站域名！');
    }
  }

  if (!empty($web_tags)) {
    if (!censor_words($options['filter_words'], $web_tags)) {
      msgbox('TAG标签中含有非法关键词！');
    }

    $web_tags = str_replace('，', ',', $web_tags);
    $web_tags = str_replace(',,', ',', $web_tags);
    if (substr($web_tags, -1) == ',') {
      $web_tags = substr($web_tags, 0, strlen($web_tags) - 1);
    }
  }

  if (empty($web_intro)) {
    msgbox('请输入网站简介！');
  } else {
    if (!censor_words($options['filter_words'], $web_intro)) {
      msgbox('网站简介中含有非法关键词！');	
    }
  }

  $web_ip = sprintf("%u", ip2long($web_ip));

  $web_data = array(
    'cate_id' => $cate_id,
    'user_id' => $myself['user_id'],
    'web_name' => $web_name,
    'web_url' => $web_url,
    'web_tags' => $web_tags,
    'web_intro' => $web_intro,
    'web_status' => 2,
    'web_ctime' => $web_time,
  );

  $query = $DB->query("SELECT web_id FROM $table WHERE web_url='$web_url'");
  if ($DB->num_rows($query)) {
    msgbox('您所提交的网站已存在！');
  }
  $DB->insert($table, $web_data);
  $insert_id = $DB->insert_id();

  $stat_data = array(
    'web_id' => $insert_id,
    'web_ip' => $web_ip,
    'web_grank' => $web_grank,
    'web_brank' => $web_brank,
    'web_srank' => $web_srank,
    'web_arank' => $web_arank,
    'web_utime' => $web_time,
  );
  $DB->insert($DB->table('webdata'), $stat_data);
  //发送邮件
  if (!empty($options['smtp_host']) && !empty($options['smtp_port']) && !empty($options['smtp_auth']) && !empty($options['smtp_user'])  && !empty($options['smtp_pass'])) {
    require(APP_PATH.'include/sendmail.php');
    if (!sendmail($options['smtp_user'], $options['site_name'].':新网站待审:'.$web_url, $options['site_url']."system/website.php?status=2")) {
      msgbox('邮件发送失败！请检查邮件发送功能设置是否正确或邮件地址错误！');	
    }
  }


  msgbox('网站提交成功！我们将尽快审核。', $pageurl);	
}else{

  if (!$smarty->isCached($tempfile)) {
    $smarty->assign('pagename', $pagename);
    $smarty->assign('site_title', $pagename.' - '.$options['site_name']);
    $smarty->assign('site_keywords', '网站登录,网址提交');
    $smarty->assign('site_path', get_sitepath().' &raquo; '.$pagename);
    $smarty->assign('category_option', get_category_option('webdir', 0, 0, 0));	
    $smarty->assign('do', 'create');
  }

  smarty_output($tempfile);
}
?>
