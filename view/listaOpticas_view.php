<?php

include_once 'libs/Smarty.class.php';

class ListaOpticasView {
  private $smarty;



function __construct(){
  $this->smarty = new Smarty();
}


function mostrarOpticas($opticas){
    $this->smarty->assign('opticas', $opticas);
    $this->smarty->display('opticas.tpl');
}

}

?>
