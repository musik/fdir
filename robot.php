<?php
if (PHP_SAPI != "cli") exit(PHP_SAPI ." 403");
error_reporting(E_ALL);
$mtime = explode(' ', microtime());
$start_time = $mtime[0] + $mtime[1];

define('ROOT_PATH', str_replace('\\', '/', dirname(__FILE__)).'/');
define('APP_PATH', ROOT_PATH.'source/');
define('MOD_PATH', ROOT_PATH.'module/');

require(APP_PATH.'init.php');
//require(APP_PATH.'module/link.php');
//require(APP_PATH.'module/adver.php');
//require(APP_PATH.'module/label.php');
//require(APP_PATH.'module/diypage.php');
require(APP_PATH.'module/category.php');
require(APP_PATH.'module/website.php');
require(APP_PATH.'module/webdata.php');
//require(APP_PATH.'module/weblink.php');
//require(APP_PATH.'module/article.php');
require(APP_PATH.'module/user.php');
require(APP_PATH.'module/stats.php');
//require(APP_PATH.'module/prelink.php');
require(APP_PATH.'module/rewrite.php');

require(ROOT_PATH.'php_crawl/robot.php');

$configs = stripslashes_deep($options);
$cate_id = $configs["other_category_id"];
if(empty($cate_id))
  exit("category 未设置");
define('LOGFILE',ROOT_PATH.'/php_crawl/log/crawler.log');
if($_SERVER['argv'][1] == 'test'){
  //test_subdomains();
  echo "test:\n";
  test_chinese_title();
}elseif($_SERVER['argv'][1] == 'local'){
  define('LOCALDEBUG',1);
  run_crawler('http://www.hnzx.gov.cn',false,false);
  //run_crawler("http://local.hongchawu.com/tmp.html",true,false);
  //run_crawler("http://fdir.jxjw.net/tmp.html",true,false);
  //run_crawler($configs["site_url"] . 'top');
}else{
  $url = $_SERVER['argv'][1];
  $url = $url ? "http://".$url : $configs["site_url"]."update";
  //$url = $url ? "http://".$url : "http://seo.chinaz.com";
  run_crawler($url,false,false);
  //run_crawler('http://www.gov.cn',false,false);
}

function test_chinese_title(){
  $arr = array();
  $arr[] = "这个可以通过,ddd00";
  $arr[] = iconv("UTF-8",'GB2312//IGNORE',"这个可以通过,ddd00");
  $arr[] = "this should not pass";
  foreach($arr as $str){
    echo $str." - ";
    var_dump( has_chinese($str));
    echo "\n";
  }

}
function test_subdomains(){
  $patts = array("/http:\/\/(?!www)\..+\.([a-z]{2,3})\/$/i",
    "/http:\/\/www\..+\.(.{4,})\.([a-z]{2,3})\/$/i"
  );
  $arr_should_pass = array('wh.dadou.com','qj.58.com','www.weihai.ccoo.cn','shop1111.taobao.com','xxxx.1688.com');
  $arr_shouldnot_pass = array('douqi.com','www.jxjw.net','www.tj.edu.cn','www.xx.com.cn');
  echo "SHOULD PASS\n";
  foreach($arr_should_pass as $k=>$domain){
    foreach($patts as $patt){
      if(preg_match($patt,"http://".$domain."/",$match)){
        unset($arr_should_pass[$k]);
        $match[] = $patt;
        print_r($match);
      }
    }
  }
  print_r($arr_should_pass);
  echo "SHOULDi NOT PASS\n";
  foreach($arr_shouldnot_pass as $k=>$domain){
    foreach($patts as $patt){
      if(preg_match($patt,"http://".$domain."/",$match)){
        unset($arr_shouldnot_pass[$k]);
        $match[] = $patt;
        print_r($match);
      }
    }
  }
  print_r($arr_shouldnot_pass);
  
}
