<?php
class OpticasModel {
  private $db;

  function __construct() {
      $this->db = new PDO('mysql:host=localhost;dbname=lacasadelasopticas;charset=utf8', 'root', '');
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  function getOpticas(){
    $opticas = array();
    $consulta = $this->db->prepare("SELECT * FROM optica order by id desc");
    $consulta->execute();
    while($optica = $consulta->fetch()){
      $consulta1 = $this->db->prepare("SELECT nombre FROM marca where id=?");
      $consulta1->execute(array($optica['fk_id_marca']));
      $marca = $consulta1->fetchAll();

      $consulta2 = $this->db->prepare("SELECT * FROM imagen where fk_id_optica=?");
      $consulta2->execute(array($optica['id']));
      $imagenes = $consulta2->fetchAll();

      $optica['imagenes'] = $imagenes;
      $optica['marca'] = $marca[0];
      $opticas[] = $optica;
    }

    return $opticas;
    }

    function getMarcas(){
      $marcas = array();
      $consulta = $this->db->prepare("SELECT * FROM marca");
      $consulta->execute();
      $marcas = $consulta->fetchAll();
      return $marcas;
    }


    function subirArchivosAJAX($archivos){
      $destinos = array();
      foreach ($archivos as $archivo) {
        $destino = 'upload/'.uniqid().$archivo['name'];
        move_uploaded_file($archivo['tmp_name'], $destino);
        $destinos[]=$destino;
      }
      return $destinos;
    }

    function agregarOptica($titulo, $descripcion, $marca, $imagenes){
    $rutas= $this->subirArchivosAJAX($imagenes);
    $consulta = $this->db->prepare('INSERT INTO optica(titulo,descripcion,fk_id_marca) VALUES(?,?,?)');
    $consulta->execute(array($titulo,$descripcion,$marca));
    $id_optica = $this->db->lastInsertId();
    foreach ($rutas as $ruta) {
      $imagenes = $this->db->prepare('INSERT INTO imagen(fk_id_optica,imagen) VALUES(?,?)');
      $imagenes->execute(array($id_optica, $ruta));
    }
}


    function getOptica($id_optica){
      $opticas = array();
      $consulta = $this->db->prepare("SELECT * FROM optica where id=? ");
      $consulta->execute(array($id_optica));

      while($optica = $consulta->fetch()){
        $consulta1 = $this->db->prepare("SELECT nombre FROM marca where id=?");
        $consulta1->execute(array($optica['fk_id_marca']));
        $marca = $consulta1->fetchAll();

        $consulta2 = $this->db->prepare("SELECT * FROM imagen where fk_id_optica=?");
        $consulta2->execute(array($optica['id']));
        $imagenes = $consulta2->fetchAll();

        $optica['imagenes'] = $imagenes;
        $optica['marca'] = $marca[0];
        $opticas[] = $optica;
      }
      return $opticas;
    }


      function borrarOptica($id_optica){
        $consulta = $this->db->prepare('DELETE FROM optica WHERE id=?');
        $consulta->execute(array($id_optica));
        $consulta = $this->db->prepare('DELETE FROM imagen WHERE fk_id_optica=?');
        $consulta->execute(array($id_optica));

        if($consulta->rowCount() > 0)
          return 'Borrado';
        else
          return 'Imposible Borrar';
        }


}
?>
