<?php
require_once "../clase03/alumnos.php";

$arrayPrueba[];

switch($_SERVER["REQUEST_METHOD"]){
    case "GET":{
        echo "Metodo GET"; 
        $arrayPrueba.array_push(new persona("alejandro","asd"));
        break;   
    }
    case "POST":{
        echo "Metodo POST";    
        break;
    }
    case "PUT":{
        echo "Metodo PUT";    
        break;
    }
    case "DELETE":{
        echo "Metodo DELETE";    
        break;
    }
    default:{
        var_dump($_SERVER);
    }

}
// $_GET["param"] // para captar el parametro pasado/
// isset($_GET["param"]); // para saber si el parametro existe