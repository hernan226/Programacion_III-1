<?php


include "manejadorDeArchivos.php";
include "alumnos.php";
include "materias.php";


switch($_SERVER["REQUEST_METHOD"]){
    case "GET":{
        switch($_GET['caso']){
            
            case "consultarAlumno":{
                $rta=manejadorDeArchivos::buscar("alumnos.txt", "apellido", $_GET["apellido"]);
                if(count($rta)>0)
                {
                    var_dump($rta);
                    break;
                }
                echo "No existe alumno con apellido ".$_GET["apellido"];
                break;
            }
            case "inscribirAlumno":{
                
                break;
            }
            case "inscripciones":{
                break;
            }
            case "inscripciones":{
                break;
            }
            case "alumnos":{
                break;
            }
        }
        break;
    }
    
    case "POST":{
        switch($_POST["caso"])
        {
            case "cargarAlumno":{
                echo "Metodo POST Alumno: \n";
                var_dump($_POST);
                //tipos de parametros
                $tipoNombre="nombre";
                $tipoApellido="apellido";
                $tipoEmail="email";
                $tipoFoto="foto";
                $tipoEntidad="alumno";


                if(isset($_POST["caso"],$_POST[$tipoNombre], $_POST[$tipoApellido], $_POST[$tipoEmail], $_FILES[$tipoFoto]))
                {
                    
                    $persona= new alumnos($_POST[$tipoNombre], $_POST[$tipoApellido], $_POST[$tipoEmail], $_FILES[$tipoFoto]);
                    manejadorDeArchivos::guardarDato($persona, "metodo", $tipoEntidad, $tipoEmail, $persona->email);
                    manejadorDeArchivos::guardarFoto($_POST["foto"]);
                    break;
                }
                echo 'No ingresó la cantidad correcta de datos requerida para un alumno';
                break;
            }
            case "cargarMateria":{
                echo "Metodo POST Materia: \n";
                var_dump($_POST);
                $tipoNombre="nombre";
                $tipoCodigo="codigo";
                $tipoCupo="cupo";
                $tipoAula="aula";
                $tipoEntidad="materia";


                if(isset($_POST["caso"],$_POST[$tipoNombre], $_POST[$tipoCodigo], $_POST[$tipoCupo], $_POST[$tipoAula]))
                {
                    $materia= new materias($_POST[$tipoNombre], $_POST[$tipoCodigo], $_POST[$tipoCupo], $_POST[$tipoAula]);
                    manejadorDeArchivos::guardarDato($materia, "metodo", $tipoEntidad, $tipoCodigo, $materia->codigo);
                    break;
                }
                echo 'No ingresó la cantidad correcta de datos requerida para una materia';
                break;
            }
            case "modificarAlumno":{
                $tipoNombre="nombre";
                $tipoApellido="apellido";
                $tipoEmail="email";
                $tipoFoto="foto";
                $tipoEntidad="alumno";
                if(isset($_POST["caso"],$_POST[$tipoNombre], $_POST[$tipoApellido], $_POST[$tipoEmail], $_FILES[$tipoFoto]))
                {
                    $persona= new alumnos($_POST[$tipoNombre], $_POST[$tipoApellido], $_POST[$tipoEmail], $_FILES[$tipoFoto]);
                    manejadorDeArchivos::guardarDato($persona, "metodo", $tipoEntidad, $tipoEmail, $persona->email);
                    manejadorDeArchivos::reemplazar("alumnos.txt",$persona, $tipoEmail, $persona->email);
                    manejadorDeArchivos::guardarFoto($_POST["foto"]);
                    break;
                }
                echo 'No ingresó la cantidad correcta de datos requerida para un alumno';
                break;
            }
        }
    }
    break;
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
?>
