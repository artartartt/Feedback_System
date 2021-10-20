<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

	public function getNews() {
		$result = $this->db->row("SELECT LEFT(text, 600) AS id,text,name,lastname,time,email FROM ".DB_NAME.".".DB_TABLE_COMMENT." ORDER BY time desc limit 10;");
		return $result;
	}

}