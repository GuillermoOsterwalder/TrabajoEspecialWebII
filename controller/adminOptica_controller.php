<?php

include_once 'view/adminOptica_view.php';
include_once 'model/opticas_model.php';

class AdminOpticasController {

  private $model;
  private $view;

  function __construct() {
   $this->model = new OpticasModel();
    $this->view = new AdminOpticasView();
  }

  function agregarOptica(){
    $this->model->agregarOptica($_REQUEST['titulo'], $_REQUEST['descripcion'], $_REQUEST['marca'], $_FILES);
  }

  function borrarOptica(){
    $this->model->borrarOptica($_REQUEST['id_optica']);
  }

  function mostrarAdminOpticas(){
    $this->view->mostrarAdminopticas($this->model->getMarcas(),$this->model->getOpticas());
  }

}
 ?>
