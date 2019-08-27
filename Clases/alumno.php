<?php
include 'Clases/persona.php';
class Alumno extends Persona
{
    // Declaración de una propiedad
    public $legajo;
    public $cuatrimestre;

    public function __construct($nombre="", $dni=0, $legajo=0, $cuatrimestre=0) {
        parent::__construct($nombre, $dni);
        $this->legajo = $legajo;
        $this->cuatrimestre = $cuatrimestre;
    }

}
?>