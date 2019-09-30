<?php
include_once "./Clases/productos.php";


if(isset ($_GET["producto"]) || isset($_GET["usuario"]) )
{
    if(isset($_GET["producto"]))
    {
        $var="id";
        $get=$_GET["producto"];
    }
    else
    {
        $var="usuario";
        $get=$_GET["usuario"];
    }
    $miClase = new productos();
   
    $arrayMiClase = productos::leerArchivo("./Archivos/producto.txt");
   	$flag=false;
   	
    $i = 0;
    if($arrayMiClase!=null)
    {
    foreach($arrayMiClase as $value)
    {
        if($value[$var] == $get)
        {
            $id= $value["id"]; 
        $nombre= $value["nombre"];
        $precio= $value["precio"];
        $foto= $value['foto'];
        $usuario= $value["usuario"];
        echo "ID: $id -- Nombre: $nombre -- Precio: $precio -- Foto: $foto -- Usuario: $usuario --".PHP_EOL;
        $flag=true;
        }
        $i++;
    }
    if($flag==false)
    {
        echo "Usuario o producto no encontrado";
    }
}
else
{
    echo "Error al leer el archivo";
}
}
?>