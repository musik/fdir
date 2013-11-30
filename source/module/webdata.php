<?php
/** 获取META信息 */
function get_sitemeta($url) {
	$url = format_url($url);
	$data = get_url_content($url);
		
	$meta = array();
	if (!empty($data)) {
		#Title
		preg_match('/<TITLE>([\w\W]*?)<\/TITLE>/si', $data, $matches);
		if (!empty($matches[1])) {
			$meta['title'] = $matches[1];
		}
    if(preg_match_all('/<meta\s*(.+?)=[\'"](.+?)[\'"]\s*(.+?)=[\'"](.+?)[\'"]\s?\/?>/',$data,$ms,PREG_SET_ORDER)){
      $needs = array("keywords","description");
      foreach($ms as $m){
        $newarr = array(
          strtolower($m[1])=>$m[2],
          strtolower($m[3])=>$m[4]
        );
        if (!$newarr["name"]) continue;
        $name = strtolower($newarr["name"]);
        $meta[$name] = $newarr["content"];
      }
    
    }
		
	}

	return $meta; 
}

/** Server IP */
function get_serverip($url) {
	$domain = get_domain($url);
	if ($domain) {
		$ip = gethostbyname($domain);
	} else {
		$ip = 0;
	}
	
	return $ip;
}

/** Google Pagerank */
function get_pagerank($url) {
	require(APP_PATH.'include/pagerank.php');
	
	$pr = new PageRank();
	$rank = $pr->getAPR($url);
	return $rank;
}

/** Baidu Pagerank */
function get_baidurank($url) {
	$data = get_url_content("http://www.aizhan.com/getbr.php?url=$url&style=1");
	if (preg_match('/<a(.*?)>(\d+)<\/a>/i', $data, $matches)) {
		$rank = intval($matches[2]);
	} else {
		$rank = 0;
	}
	return $rank;
}

/** Sogou Pagerank */
function get_sogourank($url) {
	$data = get_url_content("http://rank.ie.sogou.com/sogourank.php?ur=$url");
	if (preg_match('/sogourank=(\d+)/i', $data, $matches)) {
		$rank = intval($matches[1]);
	} else {
		$rank = 0;
	}
	return $rank;
}

/** Alexa Rank */
function get_alexarank($url) {
	$data = get_url_content("http://xml.alexa.com/data?cli=10&dat=nsa&ver=quirk-searchstatus&url=$url");
	if (preg_match('/<POPULARITY[^>]*URL[^>]*TEXT[^>]*\"([0-9]+)\"/i', $data, $matches)) {
		$rank = strip_tags($matches[1]);
	} else {
		$rank = 0;
	}
	return $rank;
}
?>
