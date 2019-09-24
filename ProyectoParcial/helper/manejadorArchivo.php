<?php
class manejadorDeArchivos{

    public static function guardarDato($archivo,$dato){

        $lista=manejadorDeArchivos::leerTodo($archivo);
        array_push($lista,$dato);
        manejadorDeArchivos::guardarTodo($archivo,$lista);
        
    }

    public static function guardarTodo($archivo,$datos){

        $archivoGuardar= fopen($archivo,"w");
        $rta=fwrite($archivoGuardar, json_encode($datos));
        fclose($archivoGuardar);
    }

    public static function leerTodo($archivo){

        $arch=fopen($archivo,"r");
        $rta = fread($arch,filesize($archivo));
        fclose($arch);
        return json_decode($rta,true);
        
    }

    public static function eliminar($archivo,$legajo){
 
        $rta= manejadorDeArchivos:: leerTodo($archivo);
        $array_aux=array();
        foreach($rta as $value){
            if(!($value["legajo"]==$legajo)){
                array_push($array_aux,$value);
            }
        }
        manejadorDeArchivos::guardarTodo($archivo,$array_aux);
    }

    public static function reemplazar($archivo,$dato){

        $rta= manejadorDeArchivos:: leerTodo($archivo);
        
        for($i=0;$i<count($rta);$i++){        
            $value=$rta[$i];
            if($value["legajo"] == $dato->legajo){
                echo "ENTRO";
                $rta[$i]=$dato; 
            }
        }
        manejadorDeArchivos::guardarTodo($archivo,$rta);
    }
}
?>