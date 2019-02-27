<?php


  
require_once('include/DB.php');
require_once('include/CestaCompra.php');
require_once('libs/Smarty.class.php');
require_once('cargarSmarty.php');


// Recuperamos la información de la sesión
session_start();

// Y comprobamos que el usuario se haya autentificado
if (!isset($_SESSION['usuario'])) 
    die("Error - debe <a href='login.php'>identificarse</a>.<br />");

// Recuperamos el codigo
/****   version usando array   ************
*   $Ordenador=new Ordenador(unserialize(base64_decode($_GET['ordenador'])));
****************************************/
//$Ordenador=unserialize(base64_decode($_GET['ordenador']));

$Ordenador=unserialize(base64_decode($_SESSION['ordenador']));
  
// Cargamos la librería de Smarty
$smarty = cargarSmarty();
/*
// Cargamos la librería de Smarty
$smarty = new Smarty;
$smarty->template_dir = '/web/smarty/tarea/templates/';
$smarty->compile_dir = '/web/smarty/tarea/templates_c/';
$smarty->config_dir = '/web/smarty/tarea/configs/';
$smarty->cache_dir = '/web/smarty/tarea/cache/';
*/



// Ponemos a disposición de la plantilla los datos necesarios
$smarty->assign('usuario', $_SESSION['usuario']);
$smarty->assign('ordenador', $Ordenador);
// Mostramos la plantilla
$smarty->display('ordenadores.tpl');     
?>
}
