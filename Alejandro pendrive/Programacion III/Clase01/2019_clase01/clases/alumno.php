<?php
include "persona.php";
interface admin{
    function inscribirse();
    function rendir();
}


class alumno extends persona implements admin{

    public $legajo;
    public $cuatrimestre;

    function __construct($nombre,$dni,$legajo,$cuatrimestre){

        parent::__construct($nombre,$dni);
        $this->legajo= $legajo;
        $this->cuatrimestre= $cuatrimestre;
    }
    
    public function inscribirse(){

        echo "ESTA ES LA FUNCION INSCRIBIRSE";
    }
    
    public function rendir(){

        echo "ESTA ES LA FUNCION RENDIR";
    }
    
    public function saluda(){
        echo parent::Saludar();
        echo "\n" . $this->legajo;
        echo "\n" . $this->cuatrimestre;
    }

}



?>