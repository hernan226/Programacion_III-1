<?php
class manejador{

    function Request($request_method, $array)
    {
        switch ($request_method) {
            case 'POST': 
                GuardarElemento($array);
                break;
            case 'GET':
                MostrarElemento($array);
                break;
            case 'DELETE':
                BorrarElemento($array);
                break;
            default:
                # code...
                break;
        }
    }
    function GuardarElemento($element)
    {

    }
    function MostrarElemento($element)
    {
        
    }
    function BorrarElemento($element)
    {
        
    }
    function TraerElementos($archivo)
    {
        $arch=fopen($archivo,"r");
        $rta = fread($arch,filesize($archivo));
        fclose($arch);
        return json_decode($rta,true);
    }
}
?>