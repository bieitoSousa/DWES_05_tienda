<?php
/* Smarty version 3.1.33, created on 2019-02-27 21:54:52
  from 'C:\xampp\htdocs\DWES_05_tienda\web\smarty\tarea\templates\ordenadores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c76f91cd8a551_83573101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '972ff9e8908f40c65840e9a8f3b3705f4e27dfe9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DWES_05_tienda\\web\\smarty\\tarea\\templates\\ordenadores.tpl',
      1 => 1551300773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c76f91cd8a551_83573101 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 5 : Programación orientada a objetos en PHP -->
<!-- Ejemplo Tienda Web: productos.php -->
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Ejemplo Tema 5: Listado de Productos con Plantillas</title>
  <link href="tienda.css" rel="stylesheet" type="text/css">
</head>

<body class="pagproductos">

<div id="contenedor">
  <div id="encabezado">
    <h1> <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->getnombrecorto();?>
 </h1>
    Codigo : <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->getcodigo();?>

  </div>
    
  <!-- Dividir en varios templates -->

    
  <div id="ordenador">
   <h1>  Caracteristicas:  </h1>
   <p>  Procesador: <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->getprocesador();?>
   </p>
   <p>  Ram: <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->getRAM();?>
 </p>
   <p>  Targeta gráfica: <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->getgrafica();?>
 </p>
   <p>  Unidad óptica: <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->getunidadoptica();?>
   </p> 
   <p>  Sistema operactivo: <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->getSO();?>
   </p>
   <p>  Otros : <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->getotros();?>
    </p>
   <p>  PVP : <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->getPVP();?>
    </p>
   <h1>  Descripcion:  </h1>
   <p>  <?php echo $_smarty_tpl->tpl_vars['ordenador']->value->getdescripcion();?>
   </p>
  </div>
  
  <br class="divisor" />
  <div id="pie">
    <form action='logoff.php' method='post'>
        <input type='submit' name='desconectar' value='Desconectar usuario <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
'/>
    </form>        
  </div>
</div>
</body>
</html><?php }
}
