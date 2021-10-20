<?php

namespace application\lib;

use PDO;

define('DB_NAME', 'contacts_for_user');
define('DB_TABLE_COMMENT', 'comments');
define('DB_TABLE_LOGIN', 'login');

class Db {


  protected $db;

  public function __construct() {
    $config = require 'application/config/db.php';
    $this->db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['name'] . '', $config['user'], $config['password']);

    $creat_db = "CREATE DATABASE IF NOT EXISTS ".DB_NAME ;


    $comments_table = "`id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `time` datetime NOT NULL" ;

    $login_table = "`login` varchar(50) NOT NULL PRIMARY KEY ,
  `password` varchar(50) NOT NULL" ;



    $this->db->exec($creat_db);
    $this->db->exec("CREATE TABLE IF NOT EXISTS ".DB_NAME.".".DB_TABLE_COMMENT."(".$comments_table.")");
    $this->db->exec("CREATE TABLE IF NOT EXISTS ".DB_NAME.".".DB_TABLE_LOGIN."(".$login_table.")");
    $r = "USE contacts_for_user;INSERT INTO `login` (`login`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3'),
('root', '63a9f0ea7bb98050796b649e85481845')";

    $this->db->exec($r);


  }

  public function row($sql, $params = []) {
    $result = $this->query($sql, $params);
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public function query($sql, $params = []) {
    $stmt = $this->db->prepare($sql);
    if (!empty($params)) {
      foreach ($params as $key => $val) {
        $stmt->bindValue(':' . $key, $val);
      }
    }
    $stmt->execute();
    return $stmt;
  }

  public function column($sql, $params = []) {
    $result = $this->query($sql, $params);
    return $result->fetchColumn();
  }


}