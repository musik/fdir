<?php
$table = $DB->table('websites');
function mylog($str){
  if(defined('LOCALDEBUG'))
    echo $str ,"\n";
}
function parse_sitemeta($data) {
	$meta = array();
	if (!empty($data)) {
		preg_match('/<TITLE>([\w\W]*?)<\/TITLE>/si', $data, $matches);
		if (!empty($matches[1])) {
			$meta['title'] = $matches[1];
		}
    if(preg_match_all('/<meta\s*(.+?)=[\'"](.+?)[\'"]\s*(.+?)=[\'"](.+?)[\'"]/si',$data,$ms,PREG_SET_ORDER)){
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
function find_or_create_site_by_doc($doc){
  global $DB,$cate_id,$table;
  if ($doc->file != '') return;
  $web_url =$doc->host;
  $query = $DB->query("SELECT web_id FROM $table WHERE web_url='{$doc->host}'");
  if ($DB->num_rows($query)) {
      echo("已存在！\n");
      return;
  }
  mylog("Parse Sitemeta...");
  //$metas = parse_sitemeta($doc->content);
  $metas = get_sitemeta($doc->host);
  $web_name = trim($metas["title"]);
  if(empty($web_name)) $web_name = $doc->host;
  $web_tags = str_replace(array(' ','，'),',',trim($metas['keywords']));
  $web_tags = str_replace(array('\'','"'),'',$web_tags);
  $web_intro = trim($metas["description"]);
  $web_time = time();
	$web_data = array(
		'cate_id' => $cate_id,
		'web_name' => $web_name,
		'web_url' => $web_url,
		'web_tags' => $web_tags,
		'web_intro' => $web_intro,
		'web_status' => 3,
		'web_ctime' => $web_time,
	);
  mylog("Parse seo data..");
  $web_ip = get_serverip($web_url);
  $web_ip = sprintf("%u", ip2long($web_ip));
  mylog("pagerank..");
	$web_grank = get_pagerank($web_url);
  mylog("baidu..");
	$web_brank = get_baidurank($web_url);
  mylog("sogou..");
	$web_srank = get_sogourank($web_url);
  mylog("alexa..");
	$web_arank = get_alexarank($web_url);
	
	$stat_data = array(
		'web_ip' => $web_ip,
		'web_grank' => $web_grank,
		'web_brank' => $web_brank,
		'web_srank' => $web_srank,
		'web_arank' => $web_arank,
		'web_utime' => $web_time,
	);
	
  print_r($web_data);
  print_r($stat_data);
  $DB->insert($table, $web_data);
  $stat_data['web_id'] = $DB->insert_id();
  $DB->insert($DB->table('webdata'), $stat_data);
  $DB->query("UPDATE ".$DB->table('categories')." SET cate_postcount=cate_postcount+1 WHERE cate_id=$cate_id");

}
// Inculde the phpcrawl-mainclass
include(dirname(__FILE__)."/libs/PHPCrawler.class.php");
class MyCrawler extends PHPCrawler 
{
  function handleDocumentInfo($DocInfo) 
  {
    if (PHP_SAPI == "cli") $lb = "\n";
    else $lb = "<br />";
    echo "Page requested: ".$DocInfo->url." (".$DocInfo->http_status_code.")".$lb;
    if (!preg_match("/^http:\/\/[a-z0-9\-\.]+\/$/i",$DocInfo->url)){
        echo("Url invalid\n");
        flush();
        return;
    }
    if(preg_match("/http:\/\/www\..+\.(.{3}\.[a-z]{2,3})\/$/i",$DocInfo->url,$matches)){
        if(!in_array($matches[1],array('com.cn','edu.cn','gov.cn'))){
          echo("found subdomain\n");
          flush();
          return;
        }
    }

    //echo "Referer-page: ".$DocInfo->referer_url.$lb;
    try{
      if ($DocInfo->received == true)
        find_or_create_site_by_doc($DocInfo);
    }catch (Exception $e){
      echo 'Caught Exception:',$e->getMessage(),"\n";
    }
    flush();
  } 
}
function run_crawler($url,$allow_subdomain=false,$resumeable=true){
  $crawler = new MyCrawler();
  $crawler->setURL($url);
  $crawler->addContentTypeReceiveRule("#text/html#");
  $crawler->addURLFilterRule("#\.(jpg|jpeg|gif|png)$# i");
  $crawler->enableCookieHandling(true);
  //$crawler->setTrafficLimit(1000 * 1024);
  //$crawler->setPageLimit(300);
  $crawler->enableAggressiveLinkSearch(false);
  $crawler->setFollowMode(0);
  $crawler->addURLFilterRule("#http:\/\/[a-z0-9-\.]+\/.+# i");
  $crawler->enableResumption();
  $crawler->setWorkingDirectory("/dev/shm/"); 
  $crawler->setUrlCacheType(PHPCrawlerUrlCacheTypes::URLCACHE_SQLITE);

  if(!$allow_subdomain){
    $crawler->addURLFilterRule("#http:\/\/(?!www).+\.([a-z]{2,3})\/$# i");
    $crawler->addURLFilterRule("/http:\/\/www\..+\.(.{4,})\.([a-z]{2,3})\/$/i");
  }
  $host = preg_replace("/[\:\/]/",'',$url);
  $tmpfile = "/tmp/mycrawlerid_for_$host.tmp";
  if($resumeable){
    if (!file_exists($tmpfile)){
      $crawler_ID = $crawler->getCrawlerId();
      file_put_contents($tmpfile, $crawler_ID);
    }else{
      $crawler_ID = file_get_contents($tmpfile);
      $crawler->resume($crawler_ID);
    }
    $crawler->go();
    unlink($tmpfile);
  }else{
    $crawler->go();
  }
  $report = $crawler->getProcessReport();
  if (PHP_SAPI == "cli") $lb = "\n";
  else $lb = "<br />";

  echo "Summary:".$lb;
  echo "Links followed: ".$report->links_followed.$lb;
  echo "Documents received: ".$report->files_received.$lb;
  echo "Bytes received: ".$report->bytes_received." bytes".$lb;
  echo "Process runtime: ".$report->process_runtime." sec".$lb; 
}
?>
