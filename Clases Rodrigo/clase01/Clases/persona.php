<?php
class Persona
{
    // Declaración de una propiedad
    public $nombre;
    public $dni;

    public function __construct($nombre="", $dni=0) {
        $this->nombre = $nombre;
        $this->dni = $dni;
    }
    public function Saludar() {
        echo "Holaaaaa $this->nombre";
    }
}
?>