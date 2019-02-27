<?php
require_once('include/DB.php');
require_once('include/CestaCompra.php');
require_once('libs/Smarty.class.php');
require_once('cargarSmarty.php');

 function filtrar_productos($productos,$ordenadores){
     foreach ($productos as &$producto) {// recorro los productos
    
             foreach ($ordenadores as &$ordenador) { // recorro los ordenadores
             //echo 'el producto es '.$producto->getcodigo().' : el ordenador es'.  $ordenador->getcodigo();
               if ($producto->getcodigo() == $ordenador->getcodigo() ){ // si los codigos son iguales 
                     $ordenador->setPVP($producto->getPVP());// defino el valor actualizado del PVP del ordenador
                     $ordenador->setnombrecorto($producto->getnombrecorto()); // defino el valor actualizado del PVP del ordenador
                     $ordenador->setdescripcion($producto->getdescripcion()); // defino el valor actualizado de description del ordenador
                     $producto = $ordenador; // como un ordenador es un producto, lo paso a la lista de productos.
                 }
                }
     
     }    
   return $productos;  // devuelvo la lista con productos y ordenadores.
 
 }
// Recuperamos la información de la sesión
session_start();

// Y comprobamos que el usuario se haya autentificado
if (!isset($_SESSION['usuario'])) 
    die("Error - debe <a href='login.php'>identificarse</a>.<br />");

// Recuperamos la cesta de la compra
$cesta = CestaCompra::carga_cesta();


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
// Comprobamos si se ha enviado el formulario de vaciar la cesta
if (isset($_POST['vaciar'])) {
    unset($_SESSION['cesta']);
    $cesta = new CestaCompra();
}

// Comprobamos si se quiere añadir un producto a la cesta
if (isset($_POST['enviar'])) {
    $cesta->nuevo_articulo($_POST['cod']);
    $cesta->guarda_cesta();
}

// Ponemos a disposición de la plantilla los datos necesarios
$smarty->assign('usuario', $_SESSION['usuario']);
 // filtramos productos 
$productos = filtrar_productos(DB::obtieneProductos(),DB::obtieneOrdenadores());
$smarty->assign('productos',$productos );
$smarty->assign('productoscesta', $cesta->get_productos());


// si un producto es un ordenador lo consideramos ordenador



// Mostramos la plantilla
$smarty->display('productos.tpl');     
?>