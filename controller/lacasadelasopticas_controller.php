<?php
  include_once 'view/lacasadelasopticas_view.php';
  include_once 'model/lacasadelasopticas_model.php';

  class opticasController {

    private $model;
    private $view;

    function __construct() {
      $this->model = new opticasModel();
      $this->view = new opticasView();
    }

    function mostrarHome(){
      $this->view->mostrarHome();
    }

  function mostrarMarcas(){
      $this->view->mostrarMarcas($this->model->getMarcas());
    }

    function mostrarAdminOpticas(){
    $this->view->mostrarAdminopticas($this->model->getMarcas(),$this->model->getOpticas());
  }

  function mostrarAdminMarcas(){
  $this->view->mostrarAdminMarcas($this->model->getMarcas());
}

  function mostrarOpticas(){
    $this->view->mostrarOpticas($this->model->getOpticas());
  }

  function agregarOptica(){
    $this->model->agregarOptica($_REQUEST['titulo'], $_REQUEST['descripcion'], $_REQUEST['marca'], $_FILES);
}

function agregarMarca(){
    $this->model->agregarMarca($_REQUEST['marca']);
}

function mostrarOpticaUnica(){
  $this->view->mostrarOpticaUnica($this->model->getOptica($_REQUEST['id_optica']));
}

function borrarMarca(){
    //$id_marca = $_GET['id_marca'];
    $this->model->borrarMarca($_REQUEST['id_marca']);
}

}
?>
