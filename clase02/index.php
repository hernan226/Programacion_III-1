<?php 
include 'Clases/Alumno.php';
$prueba = new Alumno("",0,0);
//var_dump($prueba);
$prueba->Guardar($prueba);
$prueba->Listar();
//postman
?>