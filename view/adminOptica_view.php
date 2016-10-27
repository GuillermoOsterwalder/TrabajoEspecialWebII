<?php

include_once 'libs/Smarty.class.php';

class AdminOpticasView {
  private $smarty;



function __construct(){
  $this->smarty = new Smarty();
}


function mostrarAdminOpticas($marcas,$opticas){
    $this->smarty->assign('opticas', $opticas);
    $this->smarty->assign('marcas', $marcas);
    $this->smarty->display('adminOptica.tpl');
}



}

?>
