<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

  public function indexAction() {
    $result = $this->model->getNews();
    $result_page_count = $this->model->db_comments_count();
    $count_id = (int) ($_GET['id']);

    if($count_id <= 0 || $count_id > $result_page_count){
      header('Location: '.ROOT."1");
    }
    $vars = [
      'news' => $result,
      'page_id' => $result_page_count,
    ];

    $this->view->render('Главная страница', $vars);
  }

}