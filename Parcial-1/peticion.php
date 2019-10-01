<?php

class peticion
{
    public $caso;
    public $hora;
    public $ip;

    
    public function  __construct($cas, $dat, $i){
        $this->caso=$cas;
        $this->hora=$dat;
        $this->ip=$i;

    }
    public static function guardarPeticion($archivo, $caso, $ip)
    {
        $lista=manejadorDeArchivos::leer($archivo);
        $dato=new peticion($caso, getdate(), $ip);
        array_push($lista,$dato);
        manejadorDeArchivos::guardarTodo($archivo,$lista);
    }
}
?>