<?php

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
echo "HI";
if(empty($nombre) || empty($apellido))
{
    echo "por favor ingrese su nombre y apellido";
}
else
{
    echo "Gracias ". $nombre . " " . $apellido . "!";
}

?>