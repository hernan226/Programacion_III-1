<?php

class manejadorDeArchivos{

    public static function guardarDato($dato,$metodo,$tipoEntidad,$tipoId, $id){

        $archivo=$tipoEntidad."s.txt";
        $lista=manejadorDeArchivos::leer($archivo);

        if(!manejadorDeArchivos::verificarExistenciaDeId($lista,$tipoId,$id))
        {
            array_push($lista,$dato);
            manejadorDeArchivos::guardarTodo($archivo,$lista);
        }
    }

    public static function guardarTodo($archivo,$dato){

        $archivoGuardar= fopen($archivo,"w");
        $rta=fwrite($archivoGuardar, json_encode($dato));
        fclose($archivoGuardar);

    }

    public static function leer($archivo){

        $arch=fopen($archivo,"r");
        $rta = fread($arch,filesize($archivo));
        fclose($arch);
        return json_decode($rta,true);
        
    }

    public static function verificarExistenciaDeId($lista,$keyId,$valueId){
        
        $com='"';
        $valorBuscado="$com$keyId$com:$com$valueId$com";
        $var=json_encode($lista);
        return strpos(strtolower($var), strtolower($valorBuscado));
    }

    public static function eliminar($archivo,$tipoId,$id){
        
        $rta= manejadorDeArchivos:: leer($archivo);
        $array_aux=array();
        foreach($rta as $value){
            if(!($value[$tipoId]==$id)){
                array_push($array_aux,$value);
            }
        }
        manejadorDeArchivos::guardarTodo($archivo,$array_aux);
    }

    public static function reemplazar($archivo,$dato,$tipoId,$id){

        $rta= manejadorDeArchivos:: leer($archivo);
        if(manejadorDeArchivos::verificarExistenciaDeId($rta,$tipoId,$id))
        {
            for($i=0;$i<count($rta);$i++){        
                $value=$rta[$i];
                if($value[$tipoId] == $id)
                {
                    echo "ENTRO";
                    $rta[$i]=$dato;
                }
            }
        }
        manejadorDeArchivos::guardarTodo($archivo,$rta);
    }

    public static function guardarFoto(&$pathimagen)
    {
        $extencionTmp = explode("/", $_FILES["foto"]["type"]);
        
        if ($extencionTmp[0] != "image") {
            $pathimagen = '';
            return false;
        }
        $archivoTmp = $_FILES["foto"]["tmp_name"];
        $pathimagen = "./imagenes/" . $_POST["email"] . "." . $extencionTmp[1];
        return move_uploaded_file($archivoTmp, $pathimagen);
    }

    public static function buscar($archivo, $tipoBusqueda, $idBusqueda)
    {
        $rta=manejadorDeArchivos::leer($archivo);
        
        if(!manejadorDeArchivos::verificarExistenciaDeId($rta,$tipoBusqueda,$idBusqueda))
        {
            return json_decode('[]'); 
        }
        $listaRetorno = array();
        
        foreach($rta as $value){
            if(strtolower($value[$tipoBusqueda])==strtolower($idBusqueda)){
                array_push($listaRetorno,$value);
            }
        }
        return $listaRetorno;
    }
}

?>