<?php
require_once('Producto.php');
require_once('Ordenador.php');

class DB {
    protected static function ejecutaConsulta($sql) {
        $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $dsn = "mysql:host=localhost;dbname=tarea5";
        $usuario = 'dwes';
        $contrasena = 'abc123.';
        
        $dwes = new PDO($dsn, $usuario, $contrasena, $opc);
        $resultado = null;
        if (isset($dwes)) $resultado = $dwes->query($sql);
        return $resultado;
    }

    public static function obtieneProductos() {
        $sql = "SELECT cod, nombre_corto, nombre,descripcion, PVP FROM producto;";
        $resultado = self::ejecutaConsulta ($sql);
        $productos = array();

	if($resultado) {
            // Añadimos un elemento por cada producto obtenido
            $row = $resultado->fetch();
            while ($row != null) {
                $productos[] = new Producto($row);
                $row = $resultado->fetch();
            }
	}
        return $productos;
    }
    
    public static function obtieneProducto($codigo) {
        $sql = "SELECT cod, nombre_corto, nombre,descripcion, PVP FROM producto";
        $sql .= " WHERE cod='" . $codigo . "'";
        $resultado = self::ejecutaConsulta ($sql);
        $producto = null;

	if(isset($resultado)) {
            $row = $resultado->fetch();
            $producto = new Producto($row);
	}
        
        return $producto;    
    }    
    
    /***************************** Add en el codigo ************************************************/
    /**************************** Funcion Ordenadores **********************************************/  
    
        public static function obtieneOrdenadores() { // creamos todos los objetos ordenador de la base de datos
        $sql = "SELECT cod, procesador, RAM, disco, grafica, unidadoptica, SO, otros  FROM ordenador;";
        $resultado = self::ejecutaConsulta ($sql);
        $ordenadores = array();

	if($resultado) {
            // Añadimos un elemento por cada producto obtenido
            $row = $resultado->fetch();
            while ($row != null) {
                $ordenadores[] = new Ordenador($row);
                $row = $resultado->fetch();
            }
	}
        
        return $ordenadores;
    }

    
    
    
    
        public static function obtieneOrdenador($codigo) { // creamos solo un objeto ordenador
        $sql = "SELECT cod, procesador, RAM, disco, grafica, unidadoptica, SO, otros  FROM ordenador";
        $sql .= " WHERE cod='" . $codigo . "'";
        $resultado = self::ejecutaConsulta ($sql);
        $ordenadores = null;

	if(isset($resultado)) {
            $row = $resultado->fetch();
            $ordenadores = new Ordenador($row);
	}   
        return $ordenadores;    
    }     
  /****************************************************************************/  
/*****************************  Fin Add en el codigo ************************************************/
    
    public static function verificaCliente($nombre, $contrasena) {
        $sql = "SELECT usuario FROM usuarios ";
        $sql .= "WHERE usuario='$nombre' ";
        $sql .= "AND contrasena='" . md5($contrasena) . "';";
        $resultado = self::ejecutaConsulta ($sql);
        $verificado = false;

        if(isset($resultado)) {
            $fila = $resultado->fetch();
            if($fila !== false) $verificado=true;
        }
        return $verificado;
    }
    
}




?>
