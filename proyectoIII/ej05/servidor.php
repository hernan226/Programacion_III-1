<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
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