<?php

function cargar($file, $id)
{
	$dic = "./Fotos/";
	$dicBackup = "./FotosBackUp/";
    $nameImagen = $file["imagen"]["name"];
    $hoy = date("m.d.y");
	if($id!=null)
	{
		$datoImagen=$id."-".$hoy;
	}
    else{
        $datoImagen = "sinDatos";
    }
    
	$explode = explode(".", $nameImagen);
	$tamaño = count($explode);

	$dic .= $datoImagen;
	$dic .= ".";
	$dic .= $explode[$tamaño - 1];

	
    $dicBackup.=$datoImagen;
    $dicBackup.=".";
	$dicBackup .=$explode[$tamaño - 1];

	if(!file_exists($dic))
	{
        
        move_uploaded_file($_FILES["imagen"]["tmp_name"], $dic);	
        	
	}
	else
	{
        
        
		move_uploaded_file($_FILES["imagen"]["tmp_name"], $dicBackup);
	}
    
    return $dic;
}


?>