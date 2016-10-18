<?php /* Smarty version Smarty-3.1.14, created on 2016-10-17 22:11:13
         compiled from ".\templates\adminOptica.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1037458053061556456-24298618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a243b5800ca299229c4ab3b975ac25b6df364041' => 
    array (
      0 => '.\\templates\\adminOptica.tpl',
      1 => 1476295462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1037458053061556456-24298618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'opticas' => 0,
    'optica' => 0,
    'marcas' => 0,
    'marca' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_580530615e67e2_05704242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580530615e67e2_05704242')) {function content_580530615e67e2_05704242($_smarty_tpl) {?><div class="container" id="contenido">
  <div class="row">
    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 contenido">
    <br>
    <h3 class="text-center"	> Administracion de Opticas:</h3>
    <br>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Lista de Opticas</a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in">
        <div class="panel-body">

          <ul>
            <?php  $_smarty_tpl->tpl_vars['optica'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['optica']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['opticas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['optica']->key => $_smarty_tpl->tpl_vars['optica']->value){
$_smarty_tpl->tpl_vars['optica']->_loop = true;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['optica']->value['titulo'];?>
 - <?php echo $_smarty_tpl->tpl_vars['optica']->value['marca']['nombre'];?>
</li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>


  <form method="POST" role="form">
  <div class="form-group">
    <label for="usr">Titulo:</label>
    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Ingrese Titulo" required >

    <label for="comment">Descripcion:</label>
    <textarea class="form-control" rows="5" name="descripcion" id="descripcion" placeholder="Ingrese Descripcion" required ></textarea>
  </div>

  <select id="marca" name="marca" class="form-control">
    <?php  $_smarty_tpl->tpl_vars['marca'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['marca']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['marcas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->key => $_smarty_tpl->tpl_vars['marca']->value){
$_smarty_tpl->tpl_vars['marca']->_loop = true;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['marca']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
 </option>
    <?php } ?>

</select>
<br>

<label class="control-label">Adjuntar Imagenes</label>
<br>
<input id="imagenesASubir" name="imagenesASubir[]" type="file" class="file" multiple="true" data-show-upload="true" data-show-caption="true">


<br>
<button type="submit" id="btnAgregarOptica" class="btn btn-default center-block">Enviar</button>
</form>
<br>
</div>
</div>
</div>
</div>


</div>
<script type="text/javascript" src="js/subirConAjax.js"> </script>
<?php }} ?>