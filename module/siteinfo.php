<?php
if (!defined('IN_HANFOX')) exit('Access Denied');

$pageurl = '?mod=siteinfo';
$tempfile = 'siteinfo.html';
$table = $DB->table('webdata');

//$web_id = intval($_GET['wid']);
$web_url = $_GET['domain'];
$cache_id = $web_url;
		
if (!$smarty->isCached($tempfile, $cache_id)) {
	$where = "w.web_status=3 AND w.web_url='$web_url'";
	$web = get_one_website($where);
	if (!$web) {
		unset($web);
		redirect('/member/?mod=website&act=add&web_url=' . $web_url);
	}
	
  $pagename = $web['web_name'];
	$DB->query("UPDATE $table SET web_views=web_views+1 WHERE web_id=".$web['web_id']." LIMIT 1");
	
	$cate = get_one_category($web['cate_id']);
	$user = get_one_user($web['user_id']);

  $site_title = preg_replace("/^www./",'',$web['web_url']) ;
  if($web['web_url'] != $web['web_name'])
    $site_title = $web['web_name'] .'_'.$site_title;
  //if($web['web_tags'])
    //$site_title .= implode(',',array_slice(split(',',$web['web_tags']),0,3));
	$smarty->assign('site_title', $site_title);
	$smarty->assign('site_keywords', !empty($web['web_tags']) ? $web['web_tags'] : $options['site_keywords']);
	$smarty->assign('site_description', !empty($web['web_intro']) ? $web['web_intro'] : $options['site_description']);
	$smarty->assign('site_path', get_sitepath($cate['cate_mod'], $web['cate_id']).' &raquo; '.$pagename);
	$smarty->assign('site_rss', get_rssfeed($cate['cate_mod'], $web['cate_id']));
	
	$smarty->assign('cate_id', $cate['cate_id']);
	$smarty->assign('cate_name', $cate['cate_name']);
	$smarty->assign('cate_keywords', $cate['cate_keywords']);
	$smarty->assign('cate_description', $cate['cate_description']);
	
	$web['web_furl'] = format_url($web['web_url']);
	$web['web_pic'] = get_webthumb($web['web_pic']);
	$web['web_ip'] = long2ip($web['web_ip']);
	$web['web_ctime'] = date('Y-m-d', $web['web_ctime']);
	$web['web_utime'] = date('Y-m-d', $web['web_utime']);
	
	/** tags */
	$web_tags = get_format_tags($web['web_tags']);
	$smarty->assign('web_tags', $web_tags);
	
    $smarty->assign('web', $web);
	$smarty->assign('user', $user);
	$smarty->assign('related_website', get_websites($web['cate_id'], 10, false, false, 'ctime'));
}
		
smarty_output($tempfile, $cache_id);
?>
