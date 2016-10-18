<?php /* Smarty version Smarty-3.1.14, created on 2016-10-17 21:58:43
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3039458052d73859ee7-56113973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1476636368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3039458052d73859ee7-56113973',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58052d73898cd7_41657206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58052d73898cd7_41657206')) {function content_58052d73898cd7_41657206($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<html>
	<head>

		<title> La Casa De Las Opticas </title>
		<link rel="icon" href="css/images/icono.ico"/>


		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">

	</head>

	<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">La Casa de las Opticas</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#" id="mostrar_home">Indice </a></li>
				<li><a href="#" id="mostrar_opticas">Opticas </a></li>
		<li class="dropdown">
			<a class="dropdown-toggle active" data-toggle="dropdown" href="#">Panel de Administracion <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#" id="mostrar_adm_opt"> Opticas </a></li>
				<li role="presentation" class="divider"></li>
				<li><a href="#" id="mostrar_adm_marca"> Marcas </a></li>
			</ul>
		</li>


    </div>
  </div>
</nav>

 <header>
		<img class="img-responsive center-block" src="css/images/imgheader.png" alt="Imagen Optica" >
</header>

<div id="contenido">

</div>


<footer class="text-center">
        <div class="container">
            <p>Powered by Hefesto Software&reg. // Nuestras lineas rotativas: 223-5252813, 2291-412921 // O buscanos en facebook como  <a href="https://www.facebook.com/HefeSoft" target="_blank">HefeSoft</a>.</p>
        </div>
</footer>


		<script type="text/javascript" src="js/jquery-2.1.4.min.js"> </script>
		<script type="text/javascript" src="js/bootstrap.min.js"> </script>
    <script type="text/javascript" src="js/ajax.js"> </script>

</body>
</html>
<?php }} ?>