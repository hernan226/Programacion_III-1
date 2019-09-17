<?php
include_once "./Clases/productos.php";
include_once "./Funciones/agregarFoto.php";

if(isset ($_POST["id"]) && isset($_POST["nombre"]) && isset($_POST["precio"]) && isset ($_FILES ["imagen"]) && isset($_POST["usuario"]) )
{
    
    $miClase = new productos();
    $foto=cargar($_FILES,$_POST["id"]);
    $arrayMiClase = productos::leerArchivo ("./Archivos/producto.txt");
   	$flag=false;
   	
    $i = 0;
    if($arrayMiClase!=null)
    {
    foreach($arrayMiClase as $value)
    {
        if($value["id"] == $_POST["id"])
        {
            $flag= true;
            break;
        }
        $i++;
    }
    if($flag==false)
    {
    	$miClase -> miConstructor($_POST["id"], $_POST["nombre"], $_POST["precio"], $foto, $_POST ["usuario"]);
    	$miClase -> guardarArchivo("./Archivos/producto.txt");
    }
    else {
    	echo "ID repetido";
    }
    
    }
    else
    {
        $miClase -> miConstructor($_POST["id"], $_POST["nombre"], $_POST["precio"], $foto, $_POST ["usuario"]);
        $miClase -> guardarArchivo("./Archivos/producto.txt");
    }
    
}
else
{
    echo "falta completar datos";
}

?>