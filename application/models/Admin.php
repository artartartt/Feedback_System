<?php

namespace application\models;

use application\core\Model;

class Admin extends Model {

  public function comments_for_admin(){
      $result = $this->db->row("SELECT LEFT(text, 600) AS text,id,name,lastname,time,email FROM ".DB_NAME.".".DB_TABLE_COMMENT." ORDER BY time desc limit 10;");
      return $result;
  }

  public function del_comment($element_deleting){

    $stmt = $this->db->query(  "DELETE FROM ".DB_NAME.".".DB_TABLE_COMMENT." WHERE id = ".$element_deleting);
    return $stmt;

  }
}