<?php


var_dump($_POST);
var_dump($_FILES);

$rutaTemporal= $_FILES["imagen"]["tmp_name"]; // ubicacion temporal
$extencion= $_FILES["imagen"]["type"]; // tipo del archivo
$extFinal= preg_split ("[/]", $extencion); // recorto la exprecion segun una exprecion regular
//tambien se podia hacer con la funcion explode




$nombreNuevo = "./imagenes/archivo." . $extFinal[1];
$rta= move_uploaded_file($rutaTemporal,$nombreNuevo);




?>