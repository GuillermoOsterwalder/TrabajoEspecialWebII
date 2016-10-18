<?php /* Smarty version Smarty-3.1.14, created on 2016-10-17 22:11:09
         compiled from ".\templates\opticas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95695805305dccd052-17589537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddc0849348fcfcc13992d22e7744d07fe0fc68cc' => 
    array (
      0 => '.\\templates\\opticas.tpl',
      1 => 1476293855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95695805305dccd052-17589537',
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
  'unifunc' => 'content_5805305dd397c8_23523588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5805305dd397c8_23523588')) {function content_5805305dd397c8_23523588($_smarty_tpl) {?><div class="container">
  <div class="row" >
    <?php  $_smarty_tpl->tpl_vars['optica'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['optica']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['opticas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['optica']->key => $_smarty_tpl->tpl_vars['optica']->value){
$_smarty_tpl->tpl_vars['optica']->_loop = true;
?>
    <article class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 contenidooptica">
      <label class="control-label" for="nombre"></label>
      <ul class="list-group center-blick">
      <li class="list-group-item">
        <h3> <?php echo $_smarty_tpl->tpl_vars['optica']->value['marca']['nombre'];?>
 </h3>
          <a href="index.php?action=mostrar_optica&id_optica=<?php echo $_smarty_tpl->tpl_vars['optica']->value['id'];?>
" class="linkoptica" > <h3> <u> <?php echo $_smarty_tpl->tpl_vars['optica']->value['titulo'];?>
 </u> </h3> </a>
          <p>  <?php echo $_smarty_tpl->tpl_vars['optica']->value['descripcion'];?>
</p>
          <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['optica']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
          <img class="img-responsive img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['img']->value['imagen'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['optica']->value['titulo'];?>
" style="width:150px; height:150px" >
          <?php } ?>
        </ul>
      </article>
      <?php } ?>
    </div>
  </div>
<?php }} ?>