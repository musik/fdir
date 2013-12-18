<?php
$mtime = explode(' ', microtime());
$start_time = $mtime[0] + $mtime[1];

define('ROOT_PATH', str_replace('\\', '/', dirname(__FILE__)).'/');
define('APP_PATH', ROOT_PATH.'source/');
define('MOD_PATH', ROOT_PATH.'module/');

require(APP_PATH.'init.php');
require(APP_PATH.'module/link.php');
require(APP_PATH.'module/adver.php');
require(APP_PATH.'module/label.php');
require(APP_PATH.'module/diypage.php');
require(APP_PATH.'module/category.php');
require(APP_PATH.'module/website.php');
require(APP_PATH.'module/weblink.php');
require(APP_PATH.'module/article.php');
require(APP_PATH.'module/user.php');
require(APP_PATH.'module/stats.php');
require(APP_PATH.'module/prelink.php');
require(APP_PATH.'module/rewrite.php');

require(ROOT_PATH.'php_crawl/example.php');

run_crawler();

//$process = new BackgroundProcess('run_crawler()');
//$process->run();

//echo sprintf('Crunching numbers in process %d', $process->getPid());
//while ($process->isRunning()) {
      //echo '.';
          //sleep(1);
//}
//echo "\nDone.\n";
