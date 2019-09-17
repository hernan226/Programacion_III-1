<?php
class Alumno{

    public $nombre;
    public $apellido;
    public $legajo;
    public $foto;
    
    function __construct($nombre, $apellido, $legajo, $foto){
    
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->legajo=$legajo;
        $this->foto=$foto;
    }
}
?>