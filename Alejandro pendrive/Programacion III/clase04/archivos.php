<?php


include "manejadorDeArchivos.php";
include "alumnos.php";

// $arch= fopen("archivo.json","w");
// $ar=array();
// $rta=fwrite($arch, json_encode($ar));
// fclose($arch);


switch($_SERVER["REQUEST_METHOD"]){
    case "GET":{
        echo "Metodo GET <br/>";  
        $rta= manejadorDeArchivos::leer("archivo.json");
        var_dump($rta);
        break;   
    }

    case "POST":{

        echo "Metodo POST <br/>";
        var_dump($_POST);
        if(isset($_POST["nombre"])){
            $persona= new alumnos($_POST["nombre"],$_POST["apellido"],$_POST["legajo"]);
            manejadorDeArchivos::guardarDato("archivo.json",$persona);     
        } 
        
        break; 
    }

    case "PUT":{ // reemplazaba completo
        echo "Metodo PUT <br/>";

        $persona= new alumnos($_REQUEST["nombre"],$_REQUEST["apellido"],$_REQUEST["legajo"]);
        manejadorDeArchivos::reemplazar("archivo.json",$persona);             
        
        break;
    }

    
    case "PATCH":{ // actualiza completo
        echo "Metodo PUT <br/>";    
        break;
    }

    case "DELETE":{
        echo "Metodo DELETE <br/>";
        if(isset($_REQUEST["legajo"])){
            manejadorDeArchivos::eliminar("archivo.json", $_REQUEST["legajo"]);
        }
           
        break;
    }
    default:{
        var_dump($_SERVER);
    }

}
