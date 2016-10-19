<?php
  include_once 'controller/lacasadelasopticas_controller.php';
  include_once 'config/config_app.php';
  $lacasadelasopticasController = new opticasController();

  if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) || $_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT){

  $lacasadelasopticasController->mostrarMarcas();
}

else {
  switch ($_REQUEST[ConfigApp::$ACTION]) {

    case ConfigApp::$ACTION_ADD_OPTICA:
      $lacasadelasopticasController->agregarOptica();
      break;

    case ConfigApp::$ACTION_MOSTRAR_ADMIN_OPT:
        $lacasadelasopticasController->mostrarAdminOpticas();
        break;

    case ConfigApp::$ACTION_MOSTRAR_HOME:
        $lacasadelasopticasController->mostrarHome();
        break;

    case ConfigApp::$ACTION_MOSTRAR_OPTICAS:
        $lacasadelasopticasController->mostrarOpticas();
        break;

    case ConfigApp::$ACTION_MOSTRAR_ADMIN_MARCA:
        $lacasadelasopticasController->mostrarAdminMarcas();
        break;

    case ConfigApp::$ACTION_ADD_MARCA:
        $lacasadelasopticasController->agregarMarca();
        break;

    case ConfigApp::$ACTION_MOSTRAR_OPTICA_UNICA:
        $lacasadelasopticasController->mostrarOpticaUnica();
        break;

    case ConfigApp::$ACTION_BORRAR_MARCA:
        $lacasadelasopticasController->BorrarMarca();
        break;

    case ConfigApp::$ACTION_BORRAR_OPTICA:
        $lacasadelasopticasController->BorrarOptica();
        break;

    case ConfigApp::$ACTION_MODIFICAR_MARCA:
        $lacasadelasopticasController->modificarMarca();
        break;

}
}
?>
