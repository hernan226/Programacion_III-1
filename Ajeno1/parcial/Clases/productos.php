<?php

class productos
{
    public $id;
    public $nombre;
    public $precio;
    public $foto;
    public $usuario;

    public function miConstructor($id,$nombre, $precio,$foto,$usuario)
    {
        $this -> id=$id;
        $this -> nombre = $nombre;
        $this -> precio = $precio;
       	$this -> foto= $foto;
        $this -> usuario= $usuario;
    }

    public function retornarJSon()
    {
        return json_encode($this);
    }

    

    public function guardarArchivo($path)
    {
        if($path != null)
        {
            $archivo = $path;
            $actual = $this -> retornarJSon();
            
            if(file_exists($archivo))
            {
                $archivo = fopen($path, "a");		 
            }else
            {
                $archivo = fopen($path, "w");	 
            }
            
            $renglon = $actual.="\r\n";
            
            fwrite($archivo, $renglon); 		 
            fclose($archivo);
        }
    }

    public static function leerArchivo($path)
    {
        $archivo = $path;
		if(file_exists($archivo))
		{
			$gestor = @fopen($archivo, "r");
			$array = array();
			$i = 0;
			while (($bufer = fgets($gestor, 4096)) !== false)
        	{
                $miClase = new productos();
                $miClase = json_decode($bufer, true);
        		$array[$i] = $miClase;
        		$i++;
           	}
           	
           	if (!feof($gestor)) 
    		{
       	 		echo "Error: fallo inesperado de fgets()\n";
            }		
            	
    		fclose($gestor);
    		return $array;
		}   	
    }
    public  function guardarArray($array)
    {
        $archivo=fopen("./Archivos/producto.txt", "w");  
        foreach ($array as $value) 
        {
            $dato= json_encode($value);
            $dato.="\r\n";
            fwrite($archivo, $dato);
        }
        fclose($archivo);
    }

   
}
?>