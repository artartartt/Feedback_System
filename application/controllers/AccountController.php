<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Settings;
use application\models\Comment;
use application\models\Login;
use application\models\Admin;


//mnac login sharunakem u mutq grem

class AccountController extends Controller {


  public function adminAction(){
    $result = new Admin;
    $setting = new Settings();

    $all_vars = $result->comments_for_admin();
//    array_push($all_vars,$result->del_comment());
    $vars = [
      'news' => $all_vars,
    ];
    $this->view->render('Admin page', $vars);
    $setting->del_element();

  }


	public function loginAction() {
    if(isset($_SESSION['admin'])){
      unset($_SESSION['admin']);
    }
    $all_posts = [];
    $login = new Settings();
    $result = $login->admin_login($all_posts);
      if(is_array($result) && count($result) == 1){
        $_SESSION['admin'] = true;
        header('Location: admin');
        exit;
      }

      else if(!isset($result['error'])){
        $this->view->render('Вход');
      }
      else if($result['error'] == "Login or Password wrong"){
        $this->view->render('Вход',$result );
      }


  }

	public function commentAction()
  {

		$all_posts = [];
		$setings = new Settings();
		$all_posts = $setings->settings_comment($all_posts);

		if(isset($all_posts['error']) && $all_posts['error'] == 'Stugvac'){
			$comment = new Comment();
			$comment->addComment($all_posts);
			header('Location: '.ROOT);
			exit;
		}

    if (!isset($all_posts)) {
      $this->view->render('Your Message');
    }
		else{
			$this->view->render('Your Message',$all_posts);
		}

	}

}