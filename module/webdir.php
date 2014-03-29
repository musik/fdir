<?php
if (!defined('IN_HANFOX')) exit('Access Denied');

$pagename = '网站目录';
$pageurl = '?mod=webdir';
if($_GET['order'])
  $pageurl .= "&order=".$_GET['order'];
$tempfile = 'webdir.html';
$table = $DB->table('websites');
$pagesize = 10;
$curpage = intval($_GET['page']);
if ($curpage > 1) {
	$start = ($curpage - 1) * $pagesize;
} else {
	$start = 0;
	$curpage = 1;
}
		
$cate_id = intval($_GET['cid']);
$cache_id = $cate_id.'-'.$curpage;

$pageurl .= '&cid='.$cate_id;

if (!$smarty->isCached($tempfile, $cache_id)) {
	$smarty->assign('site_title', $pagename.' - '.$options['site_name']);
	$smarty->assign('site_keywords', $options['site_keywords']);
	$smarty->assign('site_description', $options['site_description']);
	$smarty->assign('site_path', get_sitepath('webdir'));
	$smarty->assign('site_rss', get_rssfeed('webdir'));
	
	$where = "w.web_status=3";
	if ($cate_id > 0) {
		$cate = get_one_category($cate_id);
		if (!$cate) {
			unset($cate);
			redirect('?mod=category');
		}
		
    if(preg_match('/seotitle:(.+)/',$cate['cate_description'],$match)){
      $seotitle = $match[1];
      $cate['cate_description'] = preg_replace('/seotitle:(.+)\n?/','',$cate['cate_description']);

    }
    $cate_title = $cate['cate_name'] . "网站排行榜";
    $cate_title = str_replace('网站网站','网站',$cate_title);
    
    $title = $seotitle ? $seotitle : $cate_title;
		$smarty->assign('site_title', $title);
		$smarty->assign('site_keywords', !empty($cate['cate_keywords']) ? $cate['cate_keywords'] : "$cate[cate_name],$pagename");
		$smarty->assign('site_description', !empty($cate['cate_description']) ? $cate['cate_description'] : $title);
		$smarty->assign('site_path', get_sitepath($cate['cate_mod'], $cate['cate_id']));
		$smarty->assign('site_rss', get_rssfeed($cate['cate_mod'], $cate['cate_id']));
		
		if ($cate['cate_childcount'] > 0) {
			$where .= " AND w.cate_id IN (".$cate['cate_arrchildid'].")";
			$categories = get_categories($cate['cate_id']);
		} else {
			$where .= " AND w.cate_id=$cate_id";
			$categories = get_categories($cate['root_id']);
		}
	} else {
		$categories = get_categories();
	}
			
  $order = $_GET["order"] ? $_GET['order'] : 'arank';
			
	$websites = get_website_list($where, $order, 'asc', $start, $pagesize);
	$total = $DB->get_count($table.' w', $where);
	$showpage = showpage($pageurl, $total, $curpage, $pagesize);
	
	$smarty->assign('pagename', $pagename);
	$smarty->assign('cate_id', $cate['cate_id']);
	$smarty->assign('cate_name', $cate_title ? $cate_title : $pagename);
	$smarty->assign('categories', $categories);
	$smarty->assign('total', $total);
	$smarty->assign('websites', $websites);
	$smarty->assign('showpage', $showpage);
	unset($child_category, $websites);
}

smarty_output($tempfile, $cache_id);
?>
