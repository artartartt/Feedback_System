<?php


namespace application\models;
use application\core\Model;

class Login extends Model {

  public function logined($all_posts) {
    $password = md5($all_posts['password']);
    $result = $this->db->row("SELECT * FROM contacts_for_user.login  WHERE `login`= '".$all_posts['login']."' AND `password` = '".$password."'" );
    return $result;
  }


}