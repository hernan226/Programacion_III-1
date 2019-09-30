<?php
    //espacio
    $n="\n";
    $t="\t";
    $nombreImagen="imagen";
    $nombreDatos="datos";
    $nombreDestinoImagen="foto.jpg";
    $nombreDestinoDato="datos.txt";
    var_dump($_POST);
    var_dump($_FILES);

    if($_FILES == null || $_POST == null)
        return;

    $archivoImagenTmp = $_FILES[$nombreImagen]["tmp_name"];
    $archivoDatoTmp = $_FILES[$nombreDatos]["tmp_name"];

    echo "La imagen tmp leida es: $nombreImagen $n";
    echo "Archivo datos tmp leido es: $nombreDatos $n";
    
    $rta1 = move_uploaded_file($archivoImagenTmp, $nombreDestinoImagen);
    $rta2 = move_uploaded_file($archivoDatoTmp, $nombreDestinoDato);


    echo "Abro archivo $n";
    $file = fopen($nombreDestinoDato, "r") or exit("Unable to open file!");

    $nombre="";
    $apellido="";
    $legajo=0;
    
    while(!feof($file))
    {
        $string = fgets($file);
        $str_arr = preg_split ("/\;/", $string);  
        print_r($str_arr);
    }
    fclose($file);
    
    


    //sacar extencion de _FILES: typo o .ext
    //$info = new SplFileInfo($archivoTmp);
    //var_dump($info->getExtension());
    //explode('.', $rta);
    //echo "$n $info";

    //Recibir Archivo
    //Procesar Archivo
    //Almacenar Archivo
    //
    
?>