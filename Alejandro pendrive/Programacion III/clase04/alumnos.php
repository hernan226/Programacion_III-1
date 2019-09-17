<?php

class alumnos
{
    public $nombre;
    public $apellido;
    public $legajo;
    
    public function  __construct($nom,$ape,$legajo){
        $this->nombre=$nom;
        $this->apellido=$ape;
        $this->legajo=$legajo;
    }

}
?>