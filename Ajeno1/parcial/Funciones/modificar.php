<?php
include_once "./Clases/productos.php";
include_once "./Funciones/agregarFoto.php";

if(isset ($_POST["id"]) && isset($_POST["nombre"]) && isset($_POST["precio"]) && isset ($_FILES ["imagen"]) && isset($_POST["usuario"]) )
{
    
    $miClase = new productos();
    $array=array();
    $arrayMiClase = productos::leerArchivo("./Archivos/producto.txt");
   	$flag=false;
   	$foto=cargar($_FILES,$_POST["id"]);
    $i = 0;
    if($arrayMiClase!=null)
    {
    foreach($arrayMiClase as $value)
    {
        if($value["id"] == $_POST["id"])
        {
            $value["nombre"]=$_POST["nombre"];
            $value["precio"]=$_POST["precio"];
            $value["foto"]=$foto;
            $value["usuario"]=$_POST["usuario"];
            $array[$i]=$value;
            $flag= true;
        }
        else
        {
            $array[$i]=$value;
        }
        $i++;
    }
    if($flag==true)
    {
    	$miClase->guardarArray($array);
    }
    else
    {
        echo "No se encontro id";
    }
  
    
    }
    else
    {
       echo "Error al leer archivo";
    }
    
}
else
{
    echo "falta completar datos";
}

?>