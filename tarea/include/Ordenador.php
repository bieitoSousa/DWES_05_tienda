<?php
class Ordenador extends Producto { // asignamos una variable por cada parametro en la tabla
    protected $codigo;
    protected $procesador;
    protected $RAM;
    protected $disco;
    protected $grafica;
    protected $unidadoptica;
    protected $SO;
    protected $otros;
    protected $PVP;
    protected $nombre_corto;
    protected $descripcion;
    protected $CopiaOrdenador;
    protected $arrayOfOrdenador;
    // designamos una funcion para recupera cada parametro por separado
    public function setPVP($PVP) {return $this->PVP = $PVP; }
    public function setnombrecorto($nombre_corto) { $this->nombre_corto = $nombre_corto; }
    public function setdescripcion($descripcion){ $this->descripcion = $descripcion;}
    public function getPVP(){ return $this->PVP;}
    public function getnombrecorto() {return $this->nombre_corto; }
    public function getdescripcion() {return $this->descripcion;}
    public function getcodigo() {return $this->codigo; }
    public function getprocesador() {return $this->procesador; }
    public function getRAM() {return $this->RAM; }
    public function getdisco() {return $this->disco; }
    public function getgrafica() {return $this->grafica; }
    public function getunidadoptica() {return $this->unidadoptica; }
    public function getSO() {return $this->SO; }
    public function getotros() {return $this->otros; }
    public function toString() {
        
                /****   version usando array   ************
                 return '<a  href="ordenadores.php?ordenador='. base64_encode(serialize($this->cloneOrdenador())).'">  ' 
                . $this->nombre_corto.': '. $this->PVP. 'euros.</a>'; 
                 *****************************************/
                
                /****   version usando array   ************
                return '<a  href="ordenadores.php?ordenador='. base64_encode(serialize($this->arrayOfOrdenador())).'">  ' 
                . $this->nombre_corto.': '. $this->PVP. 'euros.</a>';   
                  *****************************************/
        
                 // version usando sesion
                 return '<a  href="ordenadores.php?ordenador='. $_SESSION['ordenador'] = base64_encode(serialize($this->cloneOrdenador())).'">  ' 
                . $this->nombre_corto.': '. $this->PVP. 'euros.</a>'; 
    }
    
    
    public function cloneOrdenador() { // apartir de cada $row designamos un objeto orrdenador
       $row = array(
           'cod' => $this->codigo ,
           'procesador' => $this->procesador, 
           'RAM'  => $this->RAM ,
	   'disco'  => $this->disco,
           'grafica'  => $this->grafica,
	   'unidadoptica' => $this->unidadoptica,
           'SO'  => $this->SO,
           'otros'  => $this->otros,
           'nombre_corto'  => $this->nombre_corto,
           'PVP'  => $this->PVP, 
           'descripcion'  =>$this->descripcion
        );
        $this->CopiaOrdenador=new Ordenador($row);
        return $this->CopiaOrdenador;
               
    }
    
    public function arrayOfOrdenador() { // apartir de cada $row designamos un objeto orrdenador
       $row = array(
           'cod' => $this->codigo ,
           'procesador' => $this->procesador, 
           'RAM'  => $this->RAM ,
	   'disco'  => $this->disco,
           'grafica'  => $this->grafica,
	   'unidadoptica' => $this->unidadoptica,
           'SO'  => $this->SO,
           'otros'  => $this->otros,
           'nombre_corto'  => $this->nombre_corto,
           'PVP'  => $this->PVP, 
           'descripcion'  =>$this->descripcion
        );
        $this->arrayOfOrdenador=$row;
        return $this->arrayOfOrdenador;
               
    }
    public function __construct($row) { // apartir de cada $row designamos un objeto orrdenador
        $this->codigo = $row['cod'];
        $this->procesador = $row['procesador'];
        $this->RAM = $row['RAM'];
        $this->disco = $row['disco'];
        $this->grafica = $row['grafica'];
        $this->unidadoptica = $row['unidadoptica'];
        $this->SO = $row['SO'];
        $this->otros = $row['otros'];
        $this->nombre_corto= isset($row['descripcion'])?$row['nombre_corto']:NULL;//NULL;
        $this->PVP= isset($row['PVP'])?$row['PVP']:NULL;//NULL;
        $this->descripcion= isset($row['descripcion'])?$row['descripcion']:NULL;//NULL;
        $this->CopiaOrdenador= NULL;
        $this->arrayOfOrdenador= NULL;
    }
}

?>
