<?php
include_once 'libs/Smarty.class.php';

class opticasView {
  private $smarty;

function __construct(){
  $this->smarty = new Smarty();
  $this->errores = array();
}

function mostrarMarcas($marcas){

  $this->smarty->assign('marcas', $marcas);
  $this->smarty->display('index.tpl');
}


function mostrarAdminOpticas($marcas,$opticas){
    $this->smarty->assign('opticas', $opticas);
    $this->smarty->assign('marcas', $marcas);
    $this->smarty->display('adminOptica.tpl');
}

function mostrarAdminMarcas($marcas){
    $this->smarty->assign('marcas', $marcas);
    $this->smarty->display('adminMarca.tpl');
}

function mostrarHome(){

    $this->smarty->display('home.tpl');
}

function mostrarOpticas($opticas){
    $this->smarty->assign('opticas', $opticas);

    $this->smarty->display('opticas.tpl');
}

function mostrarOpticaUnica($opticas){
    $this->smarty->assign('opticas', $opticas);

    $this->smarty->display('opticaUnica.tpl');
  }


}
?>
