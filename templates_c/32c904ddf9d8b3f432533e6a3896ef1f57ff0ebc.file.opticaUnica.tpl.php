<?php /* Smarty version Smarty-3.1.14, created on 2016-10-18 20:22:01
         compiled from ".\templates\opticaUnica.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156495806684941ecd5-35945322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32c904ddf9d8b3f432533e6a3896ef1f57ff0ebc' => 
    array (
      0 => '.\\templates\\opticaUnica.tpl',
      1 => 1476293856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156495806684941ecd5-35945322',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'opticas' => 0,
    'optica' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_580668494cd728_04959741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580668494cd728_04959741')) {function content_580668494cd728_04959741($_smarty_tpl) {?><div class="container">
  <div class="row">
    <article class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 contenido">


        <label class="control-label" for="nombre"></label>
        <ul class="list-group center-blick">
          <?php  $_smarty_tpl->tpl_vars['optica'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['optica']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['opticas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['optica']->key => $_smarty_tpl->tpl_vars['optica']->value){
$_smarty_tpl->tpl_vars['optica']->_loop = true;
?>
          <li class="list-group-item">

            <h3> <?php echo $_smarty_tpl->tpl_vars['optica']->value['marca']['nombre'];?>
 </h3>
            <h3> <?php echo $_smarty_tpl->tpl_vars['optica']->value['titulo'];?>
 </h3>
            <p>  <?php echo $_smarty_tpl->tpl_vars['optica']->value['descripcion'];?>
</p>
            <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['optica']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
            <img class="img-responsive center-block" src="<?php echo $_smarty_tpl->tpl_vars['img']->value['imagen'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['optica']->value['titulo'];?>
" >

            <?php } ?>
            <?php } ?>
          </ul>

      </article>
    </div>
  </div>
<?php }} ?>