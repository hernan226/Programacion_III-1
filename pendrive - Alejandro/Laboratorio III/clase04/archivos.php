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

        if(isset($_POST["operacion"])){
            $operacion=$_POST["operacion"];// casos validos "DELETE""PUT""PATHC"
            switch($_POST["operacion"]){
                
                case "POST":
                break;
                case "ELIMINAR":
                break;

                case "PUT":
                break;

                case "PATCH":
                break;







                default:
                    echo "DEBE INGRESAR UNA OPERACION VALIDA";
                break;
            }


        }
         
        // echo "Metodo POST <br/>";
        // var_dump($_POST);
        // if(isset($_POST["nombre"])){
        //     $persona= new alumnos($_POST["nombre"],$_POST["apellido"],$_POST["legajo"]);
        // }
        // if(isset($_FILES["imagen"])){
        //     $extencion= $_FILES["imagen"]["type"]; 
        //     $extFinal= preg_split ("[/]", $extencion);
        //     $nombreNuevo = "./imagenes/".$_POST["legajo"].".". $extFinal[1];
        //     $rta= move_uploaded_file($_FILES["imagen"]["tmp_name"],$nombreNuevo);
        //     $persona->imagen=$_POST["legajo"].".". $extFinal[1];
        // }
        // manejadorDeArchivos::guardarDato("archivo.json",$persona);
        // break; 

        echo "Metodo PUT <br/>";

        $persona= new alumnos($_REQUEST["nombre"],$_REQUEST["apellido"],$_REQUEST["legajo"]);

        if(isset($_FILES["imagen"])){
            echo "entro aca" ;
            $nombre_fichero = "./imagenes/".$_REQUEST["legajo"].".jpeg";
            echo $nombre_fichero;
            $booleano=file_exists($nombre_fichero);
            
            var_dump($booleano) ;
           if(file_exists($nombre_fichero)){
                copy($nombre_fichero,"./backupImagenes/".$_REQUEST["legajo"].".jpeg");
           }
           
            $extencion= $_FILES["imagen"]["type"]; 
            $extFinal= preg_split ("[/]", $extencion);
            $nombreNuevo = "./imagenes/".$_REQUEST["legajo"].".". $extFinal[1];
            $rta= move_uploaded_file($_FILES["imagen"]["tmp_name"],$nombreNuevo);
            $persona->imagen=$_POST["legajo"].".". $extFinal[1];
        }
        manejadorDeArchivos::reemplazar("archivo.json",$persona);             
        
        break;
    }

    case "PUT":{ // reemplazaba completo
        echo "Metodo PUT <br/>";

        $persona= new alumnos($_REQUEST["nombre"],$_REQUEST["apellido"],$_REQUEST["legajo"]);

        if(isset($_FILES["imagen"])){

            $nombre_fichero = "/clase04/imagenes/".$_REQUEST["legajo"].".jpeg";
           if(file_exists($nombre_fichero)){
                if (!copy($nombre_fichero,"/clase04/backupImagenes/".$_REQUEST["legajo"].".jpeg")) {
                    echo "Error al copiar $fichero...\n";
                }
           }
           
            $extencion= $_FILES["imagen"]["type"]; 
            $extFinal= preg_split ("[/]", $extencion);
            $nombreNuevo = "./imagenes/".$_REQUEST["legajo"].".". $extFinal[1];
            $rta= move_uploaded_file($_FILES["imagen"]["tmp_name"],$nombreNuevo);
            $persona->imagen=$_POST["legajo"].".". $extFinal[1];
        }
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
