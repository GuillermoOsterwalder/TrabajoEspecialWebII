<?php

include_once 'view/opticaUnica_view.php';
include_once 'model/opticas_model.php';

class MostrarOpticaUnicaController {

  private $model;
  private $view;

  function __construct() {
   $this->model = new OpticasModel();
   $this->view = new OpticaUnicaView();
  }

  function mostrarOpticaUnica(){
    $this->view->mostrarOpticaUnica($this->model->getOptica($_REQUEST['id_optica']));
  }

}
 ?>
