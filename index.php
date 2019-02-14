<?php
echo 'hola';

require_once('tarea/libs/Smarty.class.php');
$home ='C:\xampp\htdocs\DWES_05_tienda';
$smarty = new Smarty;
$smarty->template_dir = $home.'/web/smarty/tarea/templates/';
$smarty->compile_dir = $home.'/web/smarty/tarea/templates_c/';
$smarty->config_dir = $home.'/web/smarty/tarea/configs/';
$smarty->cache_dir = $home.'/web/smarty/tarea/cache/';

//$smarty-> testInstall(); 
header("Location:tarea/login.php"); 
/*
 
 */