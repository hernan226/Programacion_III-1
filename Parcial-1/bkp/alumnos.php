<?php

class alumnos
{
    public $nombre;
    public $apellido;
    public $email;
    public $foto;
    
    public function  __construct($nom,$ape,$ema){
        $this->nombre=$nom;
        $this->apellido=$ape;
        $this->email=$ema;
        $this->foto=$ema . ".jpeg";
    }
}
?>