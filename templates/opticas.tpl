<div class="container">
  <div class="row" >
    {foreach $opticas as $optica}
    <article class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 contenidooptica">
      <label class="control-label" for="nombre"></label>
      <ul class="list-group center-blick">
      <li class="list-group-item">
        <h3> {$optica['marca']['nombre']} </h3>
          <a href="index.php?action=mostrar_optica&id_optica={$optica['id']}" class="linkoptica" > <h3> <u> {$optica['titulo']} </u> </h3> </a>
          <p>  {$optica['descripcion']}</p>
          {foreach $optica['imagenes'] as $img}
          <img class="img-responsive img-thumbnail" src="{$img['imagen']}" alt="{$optica['titulo']}" style="width:150px; height:150px" >
          {/foreach}
        </ul>
      </article>
      {/foreach}
    </div>
  </div>
