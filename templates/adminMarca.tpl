<div class="container" id="contenido">
  <div class="row">
    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 contenido">
    <br>
    <h3 class="text-center"	> Administracion de Marcas:</h3>
    <br>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Lista de Marcas</a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in">
        <div class="panel-body">
          <ul>
            {foreach $marcas as $marca}
          <li>

            {$marca['nombre']}
            <button type="button" class="btnBorrarMarca" data-id="{$marca['id']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>

            <button type="button" class="btnModificarMarca" data-id="{$marca['id']}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>

          </li>

            {/foreach}
          </ul>
        </div>
      </div>
    </div>


  <form method="POST" role="form">
  <div class="form-group">
    <label for="usr">Insertar nueva marca:</label>
    <input type="text" class="" name="marca" id="marca" placeholder="Ingrese marca" required >
  </div>

<button type="submit" id="btnAgregarMarca" class="btn btn-default center-block">Enviar</button>
</form>
<br>
</div>
</div>
</div>
</div>


</div>

<script type="text/javascript" src="js/subirConAjax.js"> </script>
