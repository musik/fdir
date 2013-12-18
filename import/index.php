<?php
error_reporting(E_ALL);
$mtime = explode(' ', microtime());
$start_time = $mtime[0] + $mtime[1];

define('ROOT_PATH', realpath(str_replace('\\', '/', dirname(__FILE__)).'/../').'/');
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

require(ROOT_PATH.'import/functions.php');
require(ROOT_PATH.'vendor/autoload.php');
use Braincrafted\BackgroundProcess\BackgroundProcess;

//$si = new SiteImport();
//$si->check_table();
