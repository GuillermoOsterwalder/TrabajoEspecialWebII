<?php

include_once 'view/listaOpticas_view.php';
include_once 'model/opticas_model.php';

class MostrarOpticasController {

  private $model;
  private $view;

  function __construct() {
   $this->model = new OpticasModel();
    $this->view = new ListaOpticasView();
  }

  function mostrarOpticas(){
    $this->view->mostrarOpticas($this->model->getOpticas());
  }

}
 ?>
