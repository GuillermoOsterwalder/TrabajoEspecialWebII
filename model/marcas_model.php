<?php
class MarcasModel {
  private $db;

  function __construct() {
      $this->db = new PDO('mysql:host=localhost;dbname=lacasadelasopticas;charset=utf8', 'root', '');
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }


    function getMarcas(){
      $marcas = array();
      $consulta = $this->db->prepare("SELECT * FROM marca");
      $consulta->execute();
      $marcas = $consulta->fetchAll();
      return $marcas;
    }


    function agregarMarca($marca){
      $consulta = $this->db->prepare('INSERT INTO marca(nombre) VALUES(?)');
      $consulta->execute(array($marca));
    }

    function borrarMarca($id_marca){
      $consulta = $this->db->prepare('DELETE FROM marca WHERE id=?');
      $consulta->execute(array($id_marca));
      $consulta = $this->db->prepare('DELETE FROM optica WHERE fk_id_marca=?');
      $consulta->execute(array($id_marca));
      $id_optica = $this->db->lastInsertId();
      $consulta = $this->db->prepare('DELETE FROM imagen WHERE fk_id_optica=?');
      $consulta->execute(array($id_optica));

      if($consulta->rowCount() > 0)
        return 'Borrado';
      else
        return 'Imposible Borrar';
      }

      function modificarMarca($marca,$id){
        $consulta = $this->db->prepare('UPDATE marca SET nombre=? WHERE id=?');
        $consulta->execute(array($marca,$id));
        }

}
?>
