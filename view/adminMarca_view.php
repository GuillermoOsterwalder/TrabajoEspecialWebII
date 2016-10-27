<?php

include_once 'libs/Smarty.class.php';

class AdminMarcaView {
  private $smarty;



function __construct(){
  $this->smarty = new Smarty();
}


function mostrarMarcas($marcas){

  $this->smarty->assign('marcas', $marcas);
  $this->smarty->display('index.tpl');
}


function mostrarAdminMarcas($marcas){
    $this->smarty->assign('marcas', $marcas);
    $this->smarty->display('adminMarca.tpl');
}


}

?>
