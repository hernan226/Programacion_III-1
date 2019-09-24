<?php

class persona{

    public $nombre;
    public $dni;

    function __construct( $NOMBRE, $DNI ) {
        $this->nombre = $NOMBRE;
        $this->dni = $DNI;
    }
    
    public function Saludar(){
        echo "hola $this->nombre";
        echo "<br/> DNI:  $this->dni";
    }


}







?>