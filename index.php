<?php
  include_once 'config/config_app.php';
  include_once 'controller/index_controller.php';
  include_once 'controller/home_controller.php';
  include_once 'controller/adminMarca_controller.php';
  include_once 'controller/adminOptica_controller.php';
  include_once 'controller/listaOpticas_controller.php';
  include_once 'controller/opticaUnica_controller.php';

  if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) ||
  $_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
  {
  $indexController = new indexController();
  $indexController->mostrarIndex();
  }

else {
  switch ($_REQUEST[ConfigApp::$ACTION]) {

    case ConfigApp::$ACTION_ADD_OPTICA:
      $adminOpticaController = new AdminOpticasController();
      $adminOpticaController->agregarOptica();
  break;

  case ConfigApp::$ACTION_MOSTRAR_ADMIN_OPT:
        $mostrarAdminOpticasController = new AdminOpticasController();
        $mostrarAdminOpticasController->mostrarAdminOpticas();
        break;

    case ConfigApp::$ACTION_MOSTRAR_HOME:
        $mostrarHomeController = new HomeController();
        $mostrarHomeController->mostrarHome();
        break;

    case ConfigApp::$ACTION_MOSTRAR_OPTICAS:
        $mostrarOpticasController = new MostrarOpticasController();
        $mostrarOpticasController->mostrarOpticas();
        break;

    case ConfigApp::$ACTION_MOSTRAR_ADMIN_MARCA:
        $mostrarAdminMarcasController = new AdminMarcaController();
        $mostrarAdminMarcasController->mostrarAdminMarcas();
        break;

    case ConfigApp::$ACTION_ADD_MARCA:
        $agregarMarcaController = new AdminMarcaController();
        $agregarMarcaController->agregarMarca();
        break;

    case ConfigApp::$ACTION_MOSTRAR_OPTICA_UNICA:
        $mostrarOpticaUnicaController = new MostrarOpticaUnicaController();
        $mostrarOpticaUnicaController->mostrarOpticaUnica();
        break;

    case ConfigApp::$ACTION_BORRAR_MARCA:
        $borrarMarcaController = new AdminMarcaController();
        $borrarMarcaController->BorrarMarca();
        break;

    case ConfigApp::$ACTION_BORRAR_OPTICA:
        $borrarOpticaController = new AdminOpticasController();
        $borrarOpticaController->BorrarOptica();
        break;

    case ConfigApp::$ACTION_MODIFICAR_MARCA:
        $modificarMarcaController = new AdminMarcaController();
        $modificarMarcaController->modificarMarca();
        break;

}
}
?>
