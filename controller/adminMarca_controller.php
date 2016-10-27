<?php

include_once 'view/adminMarca_view.php';
include_once 'model/marcas_model.php';

class AdminMarcaController {

  private $model;
  private $view;

  function __construct() {
   $this->model = new MarcasModel();
   $this->view = new adminMarcaView();
  }


  function mostrarAdminMarcas(){
  $this->view->mostrarAdminMarcas($this->model->getMarcas());
  }


  function borrarMarca(){
      $this->model->borrarMarca($_REQUEST['id_marca']);
  }

  function modificarMarca(){
      $this->model->modificarMarca($_REQUEST['marca'],$_REQUEST['id_marca']);
  }

  function agregarMarca(){
      $this->model->agregarMarca($_REQUEST['marca']);
  }

  function mostrarMarcas(){
      $this->view->mostrarMarcas($this->model->getMarcas());
    }

}
 ?>
