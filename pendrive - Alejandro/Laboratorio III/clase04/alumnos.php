<?php

class alumnos
{
    public $nombre;
    public $apellido;
    public $legajo;
    public $foto;
    
    public function  __construct($nom,$ape,$legajo,$imagen=NULL){
        $this->nombre=$nom;
        $this->apellido=$ape;
        $this->legajo=$legajo;
        $this->foto=$imagen;
    }

}
?>