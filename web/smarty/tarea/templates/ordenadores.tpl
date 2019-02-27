<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
    <h1> {$ordenador->getnombrecorto()} </h1>
    Codigo : {$ordenador->getcodigo()}
  </div>
    
  <!-- Dividir en varios templates -->

    
  <div id="ordenador">
   <h1>  Caracteristicas:  </h1>
   <p>  Procesador: {$ordenador->getprocesador()}   </p>
   <p>  Ram: {$ordenador->getRAM()} </p>
   <p>  Targeta gráfica: {$ordenador->getgrafica()} </p>
   <p>  Unidad óptica: {$ordenador->getunidadoptica()}   </p> 
   <p>  Sistema operactivo: {$ordenador->getSO()}   </p>
   <p>  Otros : {$ordenador->getotros()}    </p>
   <p>  PVP : {$ordenador->getPVP()}    </p>
   <h1>  Descripcion:  </h1>
   <p>  {$ordenador->getdescripcion()}   </p>
  </div>
  
  <br class="divisor" />
  <div id="pie">
    <form action='logoff.php' method='post'>
        <input type='submit' name='desconectar' value='Desconectar usuario {$usuario}'/>
    </form>        
  </div>
</div>
</body>
</html>