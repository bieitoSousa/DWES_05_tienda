<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function  cargarSmarty () {
    $home ='C:\xampp\htdocs\DWES_05_tienda';
    $smarty = new Smarty;
    $smarty->template_dir = $home.'/web/smarty/tarea/templates/';
    $smarty->compile_dir = $home.'/web/smarty/tarea/templates_c/';
    $smarty->config_dir = $home.'/web/smarty/tarea/configs/';
    $smarty->cache_dir = $home.'/web/smarty/tarea/cache/';

    return $smarty;
    
}


//$smarty-> testInstall(); 
