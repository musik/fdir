<?php
// Inculde the phpcrawl-mainclass
include(dirname(__FILE__)."/libs/PHPCrawler.class.php");
class MyCrawler extends PHPCrawler 
{
  function handleDocumentInfo($DocInfo) 
  {
    if (PHP_SAPI == "cli") $lb = "\n";
    else $lb = "<br />";
    echo "Page requested: ".$DocInfo->url." (".$DocInfo->http_status_code.")".$lb;
    //echo "Referer-page: ".$DocInfo->referer_url.$lb;
    if ($DocInfo->received == true)
      echo "Content received: ".$DocInfo->bytes_received." bytes".$lb;
    else
      echo "Content not received".$lb; 
    echo $lb;
    flush();
  } 
}
function run_crawler(){
  $crawler = new MyCrawler();
  $crawler->setURL("www.jxjw.net");
  $crawler->addContentTypeReceiveRule("#text/html#");
  $crawler->addURLFilterRule("#\.(jpg|jpeg|gif|png)$# i");
  $crawler->enableCookieHandling(true);
  //$crawler->setTrafficLimit(1000 * 1024);
  $crawler->setFollowMode(0);
  $crawler->addURLFilterRule("#http:\/\/.+\/.+# i");
  $crawler->addURLFilterRule("#http:\/\/[^www].+# i");
  $crawler->enableResumption();
  $crawler->setWorkingDirectory("/dev/shm/"); 
  $crawler->setUrlCacheType(PHPCrawlerUrlCacheTypes::URLCACHE_SQLITE);
  $tmpfile = "/tmp/mycrawlerid_for_php.net.tmp";
  if (!file_exists($tmpfile)){
    $crawler_ID = $crawler->getCrawlerId();
    file_put_contents($tmpfile, $crawler_ID);
  }else{
    $crawler_ID = file_get_contents($tmpfile);
    $crawler->resume($crawler_ID);
  }
  $crawler->go();
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
