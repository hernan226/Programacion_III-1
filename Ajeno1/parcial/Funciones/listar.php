<?php
include_once "./Clases/usuario.php";


if(isset($_GET["usuario"]) )
{
    
    
    $nombre=$_GET["usuario"];
    $arrayMiClase = usuario::leerArchivo("./Archivos/usuario.txt");
   	$flag=false;
   	$clave=null;
    $i = 0;
    if($arrayMiClase!=null)
    {
    foreach($arrayMiClase as $value)
    {
        if($value["nombre"] == $_GET["usuario"])
        {
            $flag= true;

            $clave=$value["clave"];
        }
        $i++;
    }
    if($flag==false)
    {
    	echo "usuario $nombre no existe";
    }
    else {
    	 echo "Nombre: $nombre -- clave: $clave --"; 
    }
    
    }
    else
    {
        echo "Error al leer archivo";
        
    }
    
}
else
{
    echo "rompe";
}

?>