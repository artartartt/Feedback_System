<?php

namespace application\lib;

use application\models\Comment;
use application\models\Login;
use application\models\Admin;

class Settings {

  public function settings_comment($all_posts) {
    if (isset($_POST['Send_sms'])) {

      $name = $_POST['name'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $text = $_POST['text'];

      $all_posts = [
        'name' => $name,
        'lastname' => $lastname,
        'email' => $email,
        'text' => $text,
        'error' => 'Stugvac',
      ];

      if (strlen($name) < 3) {
        $all_posts['error'] = "Error name";
        return $all_posts;
      }
      if (strlen($lastname) < 3) {
        $all_posts['error'] = "Error lastname";
        return $all_posts;

      }
      if (strlen($email) < 7) {
        $all_posts['error'] = "Error email";
        return $all_posts;

      }
      if (strlen($text) < 10) {
        $all_posts['error'] = "Error text";
      }
      return $all_posts;

    }
  }

  public function admin_login($all_posts) {

    if (isset($_POST['login_btn'])) {
      $all_posts = [
        'login' => $_POST['login'],
        'password' => $_POST['password'],
      ];
      $login_setting = new Login();
      $db_all_post = $login_setting->logined($all_posts);
      if (empty($db_all_post)) {
        $all_posts['error'] = 'Login or Password wrong';
        return $all_posts;
      }
      return $db_all_post;
    }
  }

  public function del_element() {
      // karam mihat urish input pahem formi mej
    //js ov stugem ete sexmvela et valuen tam input-in heto et mi texic vekalem
      if (isset($_POST['where_clicked'])) {
        $index_btn = $_POST['where_clicked'];
        $del = new Admin();
        $del->del_comment($_POST['del_'.$index_btn]);
        header('Location: '.$_SERVER['REQUEST_URI']);
        exit;
      }


  }

}

?>