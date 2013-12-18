<?php
class Site {
  function __construct(){
  
  }
}
class SiteImport {
  function __construct(){
    global $DB;
    $this->table = $DB->table('sites') ;
    $this->db = $DB;
  }
  function table_exists(){
     return $this->db->fetch_one("show tables like '{$this->table}'") !== false;
  }
  function check_table(){
    if(!$this->table_exists()){
      $this->db->query("
CREATE TABLE `{$this->table}` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `host` varchar(100) NOT NULL DEFAULT '',
  `published` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
        ");
    }
  }
}
