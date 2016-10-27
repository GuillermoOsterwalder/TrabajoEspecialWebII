<?php

include_once 'view/home_view.php';

class HomeController {

  private $view;

  function __construct() {
   $this->view = new HomeView();
  }

  function mostrarHome(){
    $this->view->mostrarHome();
  }
}
 ?>
