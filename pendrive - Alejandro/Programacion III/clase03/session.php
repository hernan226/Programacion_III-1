<?php
session_start();

if(!isset($_SESSION["count"])){
    $_SESSION["count"]=0;
}
$_SESSION["count"] +=1 ;
echo $_SESSION["count"];

require_once "../clase03/alumnos.php";



    $aux= new alumnos("alejandro","laborde","blas parera",1852);
    $arrayPersonas[]=$aux;
    $aux= new alumnos("daniel","laborde","blas parera",1852);
    $arrayPersonas[]=$aux;
    $aux= new alumnos("pamela","laborde","blas parera",1852);
    $arrayPersonas[]=$aux;

    var_dump($arrayPersonas);
   
if($_SERVER["REQUEST_METHOD"] == "GET"){
    if(isset($_GET["nombre"])){
         $_SESSION[].array_push(new alumnos($_GET["nombre"],$_GET["apellido"],"blas parera",$_GET["codigoPostal"]));
    }
}

if(isset($_GET["mostrar"])){
    var_dump($_SESSION);
}


