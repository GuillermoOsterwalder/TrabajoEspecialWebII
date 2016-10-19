<?php /* Smarty version Smarty-3.1.14, created on 2016-10-19 19:31:16
         compiled from ".\templates\adminMarca.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1146458052d7622f196-12309928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '174cdbbabc63ed09a20ecb7038fea906bc008799' => 
    array (
      0 => '.\\templates\\adminMarca.tpl',
      1 => 1476897689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1146458052d7622f196-12309928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58052d76286f56_55735240',
  'variables' => 
  array (
    'marcas' => 0,
    'marca' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58052d76286f56_55735240')) {function content_58052d76286f56_55735240($_smarty_tpl) {?><div class="container" id="contenido">
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
            <?php  $_smarty_tpl->tpl_vars['marca'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['marca']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['marcas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->key => $_smarty_tpl->tpl_vars['marca']->value){
$_smarty_tpl->tpl_vars['marca']->_loop = true;
?>
          <li>

            <?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>

            <button type="button" class="btnBorrarMarca" data-id="<?php echo $_smarty_tpl->tpl_vars['marca']->value['id'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>

            <button type="button" class="btnModificarMarca" data-id="<?php echo $_smarty_tpl->tpl_vars['marca']->value['id'];?>
"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>

          </li>

            <?php } ?>
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
<?php }} ?>