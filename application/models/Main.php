<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

  public function getNews() {

    $count_id = (int) ($_GET['id']);
    $result = $this->db->row("SELECT LEFT(text, 600) AS text,id,name,lastname,time,email FROM " . DB_NAME . "." . DB_TABLE_COMMENT . " ORDER BY time desc limit ".(($count_id-1)*10).",10;");
    return $result;
  }

  public function db_comments_count() {
    $result = $this->db->column(" SELECT COUNT(DISTINCT id)  FROM " . DB_NAME . "." . DB_TABLE_COMMENT) / 10;
    if ($result > intval($result)) {
      return intval($result) + 1;
    }
    else {
      return $result;
    }

  }

}