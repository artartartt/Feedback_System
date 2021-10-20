<?php

namespace application\models;

use application\core\Model;

class Comment extends Model {

	public function addComment($all_posts) {
		unset($all_posts['error']);
		$all_posts['time'] = date_create('now')->format('Y-m-d H:i:s');
		$result = $this->db->query('INSERT INTO '.DB_NAME.".".DB_TABLE_COMMENT.' (name, lastname, email, text,time)
			VALUES (:name, :lastname, :email, :text,:time)',$all_posts);		
		
	}

}