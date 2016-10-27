<?php

include_once 'libs/Smarty.class.php';

class OpticaUnicaView {
  private $smarty;



function __construct(){
  $this->smarty = new Smarty();
}


function mostrarOpticaUnica($opticas){
    $this->smarty->assign('opticas', $opticas);
    $this->smarty->display('opticaUnica.tpl');
  }
}

?>
