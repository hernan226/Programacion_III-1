<?
function Alta($alum,$path){
  $aux=Leer($path);
  if( Validar($alum,$aux)){
      array_push($aux,$alum);
      Guardar($aux);
      return true;
  }   
  return false;
}
function Leer($path){
    $archivo= fopen($path,'c');
    if($archivo != null){
        $aux=fread($archivo,filesize($path));
    }
    fclose($archivo);
    return json_decode($aux,true);
}
function Baja($alum,$path){
    
    
}
function Modificar($alum,$path){
    
    
}
function Guardar($array,$path){
    $archivo=fopen($path,'w');
    $aux=json_encode($array,true);
    fwrite($archivo,$aux);
    fclose($archivo);
}

