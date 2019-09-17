<?php

class persona{

    public $nombre;
    public $dni;

    function __construct( $NOMBRE, $DNI ) {
        $this->nombre = $NOMBRE;
        $this->dni = $DNI;
    }

    function __construct(){

        this::__construct("alejandro","3883444");
        
    }


    public function Saludar(){
        echo "hola $this->nombre";
        echo "<br/> DNI:  $this->dni";
    }


}







?>