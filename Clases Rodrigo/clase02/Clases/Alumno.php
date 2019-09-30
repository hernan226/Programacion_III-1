<?php

class Alumno
{
    // Declaración de una propiedad
    public $nombre;
    public $legajo;
    public $cuatrimestre;
    public static $alumnos = array();

    public function __construct($nombre="", $legajo=0, $cuatrimestre=0) {
        $this->$nombre=$nombre;
        $this->legajo = $legajo;
        $this->cuatrimestre = $cuatrimestre;
    }
    public function Guardar($alum)
    {
        if(!isset($var))
            $alumnos->array_push($alum);
    }
    public function Borrar($id)
    {
        if(isset($var))
        {
            
        }
    }
    public function Modificar($alum)
    {
        
    }
    public static function Listar()
    {
        if(isset($var))
            echo json_encode($alumnos);
        echo "blabla";
    }
}
?>