<?php

class persona{

    public $nombre;
    public $dni;

    function __construct( $NOMBRE, $DNI ) {
        $this->nombre = $NOMBRE;
        $this->dni = $DNI;
        
    }
    
    public function TraerDatos(){
        echo "\nNombre: $this->nombre";
        echo "\nDNI:  $this->dni";
    }
}
?>