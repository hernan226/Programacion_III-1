<?php
include_once "./Clases/usuario.php";


if(isset($_POST["usuario"]) && isset($_POST["clave"]) )
{
    
    $miClase = new usuario();
   
    $arrayMiClase = usuario::leerArchivo("./Archivos/usuario.txt");
   	$flag=false;
   	
    $i = 0;
    if($arrayMiClase!=null)
    {
    foreach($arrayMiClase as $value)
    {
        if($value["nombre"] == $_POST["usuario"])
        {
            $flag= true;
            break;
        }
        $i++;
    }
    if($flag==false)
    {
    	$miClase -> miConstructor($_POST["usuario"], $_POST["clave"]);
    	$miClase -> guardarArchivo("./Archivos/usuario.txt");
    }
    else {
    	echo "Usuario repetido";
    }
    
    }
    else
    {
        $miClase -> miConstructor($_POST["usuario"], $_POST["clave"]);
        $miClase -> guardarArchivo("./Archivos/usuario.txt");
    }
    
}
else
{
    echo "falta completar datos";
}

?>