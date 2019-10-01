<?php

class materias
{
    public $nombre;
    public $codigo;
    public $cupo;
    public $aula;
    
    public function  __construct($nom,$cod,$cup,$aul){
        $this->nombre=$nom;
        $this->codigo=$cod;
        $this->cupo=$cup;
        $this->aula=$aul;
    }
}
?>