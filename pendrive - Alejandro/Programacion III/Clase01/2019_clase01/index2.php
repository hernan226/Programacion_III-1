<?php

include 'clases/alumno.php';

//$persona = new persona("alejandro","38834224");
//$persona->Saludar();

$alumno = new alumno("alejandro","38834224","123456","3");
$alumno->saluda();
$alumno->rendir();
$alumno->inscribirse();




?>

