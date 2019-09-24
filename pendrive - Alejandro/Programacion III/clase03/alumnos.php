<?php

class alumnos
{
    public $nombre;
    public $apellido;
    public $calle;
    public $codigoPostal;

    public function  __construct($nom,$ape,$call,$codPos){
        $this->nombre=$nom;
        $this->apellido=$ape;
        $this->calle=$call;
        $this->codigoPostal=$codPos;
    }

}
?>