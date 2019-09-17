<?php
include_once "./Clases/productos.php";

    $miClase = new productos();
    $arrayMiClase = productos::leerArchivo("./Archivos/producto.txt");
   	
   	
    $i = 0;
    if($arrayMiClase!=null)
    {
    foreach($arrayMiClase as $value)
    {
        $id= $value["id"]; 
        $nombre= $value["nombre"];
        $precio= $value["precio"];
        $foto= $value['foto'];
        $usuario= $value["usuario"];
        echo "ID: $id -- Nombre: $nombre -- Precio: $precio -- Foto: $foto -- Usuario: $usuario --".PHP_EOL;
        $i++;
    }
    
    }
    else
    {
        echo "Error al leer el archivo";
    }

?>