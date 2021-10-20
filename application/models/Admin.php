<?php

namespace application\models;
use application\models\Main;
use application\core\Model;

class Admin extends Model {

  public function comments_for_admin(){
    $Main_req = new Main;
    return $Main_req->getNews();
  }

  public function del_comment($element_deleting){

    $stmt = $this->db->query(  "DELETE FROM ".DB_NAME.".".DB_TABLE_COMMENT." WHERE id = ".$element_deleting);
    return $stmt;

  }
}