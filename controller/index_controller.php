<?php

include_once 'view/index_view.php';

class indexController {

  private $view;

  function __construct() {
    $this->view = new indexView();
  }

  function mostrarIndex(){
    $this->view->mostrarIndex();
  }



}

 ?>
