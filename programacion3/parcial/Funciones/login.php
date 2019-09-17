<?php
include_once "./Clases/usuario.php";


if(isset($_POST["usuario"]) && isset($_POST["clave"]) )
{
    
    
	$arrayMiClase = usuario::leerArchivo("./Archivos/usuario.txt");
   	$flag=false;
   	$i = 0;
   if($arrayMiClase!=null)
    {
    foreach($arrayMiClase as $value)
    {
    	
    	if($value["nombre"] == $_POST["usuario"] && $value["clave"]==$_POST["clave"])
        {
            $flag= true;
            break;
        }
        $i++;
    }
    if($flag==false)
    {
    	echo "usuario o contraseña incorrecta";
    }
    else {
    	return true;
    }
    
    }
    else
    {
        echo "no hay usuarios registrados";
    }
    
    
}

?>