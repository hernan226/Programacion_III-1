<?php


include "manejadorDeArchivos.php";
include "usuario.php";
include "peticion.php";
switch($_SERVER["REQUEST_METHOD"]){

    case "GET":{
        switch($_GET['caso']){
            
            case "login":{
                peticion::guardarPeticion("info.log", $_GET['caso'], $_SERVER['SERVER_ADDR']);
                $rta = usuario::login("usuarios.txt", $_GET["legajo"], $_GET["clave"]);
                echo $rta;
                break;
            }
            default:{
                echo json_encode($_GET);
            }
        }
        break;
    }
    case "POST":{
        switch($_POST["caso"])
        {
            case "cargarUsuario":{
                echo json_encode($_POST);
                //tipos de parametros
                $tipoEntidad="usuario";
                $tipoLegajo="legajo";
                $tipoEmail="email";
                $tipoNombre="nombre";
                $tipoClave="clave";
                $tipoFoto1="foto1";
                $tipoFoto2="foto2";

                if(isset($_POST["caso"],$_POST[$tipoLegajo], $_POST[$tipoEmail], $_POST[$tipoNombre], $_POST[$tipoClave],$_FILES[$tipoFoto1],$_FILES[$tipoFoto2]))
                {
                    $user= new usuario($_POST[$tipoLegajo], $_POST[$tipoEmail], $_POST[$tipoNombre], $_POST[$tipoClave],$_FILES[$tipoFoto1],$_FILES[$tipoFoto2]);
                    manejadorDeArchivos::guardarDato($user, $tipoEntidad, $tipoLegajo, $user->legajo);
                    manejadorDeArchivos::guardarFoto($_POST["foto1"],"imag/fotos","$user->legajo-foto1","foto1");
                    manejadorDeArchivos::guardarFoto($_POST["foto2"],"imag/fotos","$user->legajo-foto2","foto2");
                    break;
                }
                echo json_encode('{"Error":"No ingreso la cantidad correcta de datos requerida para un usuario"}');
                break;
            }
            case "modificarUsuario":{
                echo json_encode($_POST);
                //tipos de parametros
                $tipoEntidad="usuario";
                $tipoLegajo="legajo";
                $tipoEmail="email";
                $tipoNombre="nombre";
                $tipoClave="clave";
                $tipoFoto1="foto1";
                $tipoFoto2="foto2";

                if(isset($_POST["caso"],$_POST[$tipoLegajo], $_POST[$tipoEmail], $_POST[$tipoNombre], $_POST[$tipoClave],$_FILES[$tipoFoto1],$_FILES[$tipoFoto2]))
                {
                    $user= new usuario($_POST[$tipoLegajo], $_POST[$tipoEmail], $_POST[$tipoNombre], $_POST[$tipoClave],$_FILES[$tipoFoto1],$_FILES[$tipoFoto2]);
                    manejadorDeArchivos::reemplazar("usuarios.txt", $tipoEntidad, $tipoLegajo, $user->legajo);
                    manejadorDeArchivos::guardarFoto($_POST["foto1"],"imag/fotos","$user->legajo-foto1","foto1");
                    manejadorDeArchivos::guardarFoto($_POST["foto2"],"imag/fotos","$user->legajo-foto2","foto2");
                    break;
                }
                break;
            }
            default:{
                echo json_encode($_POST);
            }
        }
    }
    break;   

    
    default:{
        var_dump($_SERVER);
    }
}
?>
