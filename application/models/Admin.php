<?php

namespace application\models;
use application\models\Main;
use application\core\Model;

class Admin extends Model {

  public function comments_for_admin(){
    $count_id = (int)trim( $_GET['id'],'account/admin' );
    $result = $this->db->row("SELECT LEFT(text, 600) AS text,id,name,lastname,time,email FROM " . DB_NAME . "." . DB_TABLE_COMMENT . " ORDER BY time desc limit ".(($count_id-1)*10).",10;");
    return $result;
  }

  public function del_comment($element_deleting){
    if(isset($_SESSION['admin']) && $_SESSION['admin'] == "asd1dqd1da1dihdYUGDYUfgVSHDVhadvsghDG" ){
      $stmt = $this->db->query("DELETE FROM " . DB_NAME . "." . DB_TABLE_COMMENT . " WHERE id = " . $element_deleting);
      return $stmt;
    }
    else
      return false;

  }
}