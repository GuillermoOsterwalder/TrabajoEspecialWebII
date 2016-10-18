<div class="container">
  <div class="row">
    <article class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 contenido">


        <label class="control-label" for="nombre"></label>
        <ul class="list-group center-blick">
          {foreach $opticas as $optica}
          <li class="list-group-item">

            <h3> {$optica['marca']['nombre']} </h3>
            <h3> {$optica['titulo']} </h3>
            <p>  {$optica['descripcion']}</p>
            {foreach $optica['imagenes'] as $img}
            <img class="img-responsive center-block" src="{$img['imagen']}" alt="{$optica['titulo']}" >

            {/foreach}
            {/foreach}
          </ul>

      </article>
    </div>
  </div>
