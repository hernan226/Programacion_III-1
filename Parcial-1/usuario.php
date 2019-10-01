<?php

class usuario
{
    public $legajo;
    public $email;
    public $nombre;
    public $clave;
    public $foto1;
    public $foto2;
    
    public function  __construct($leg,$emai,$nom,$cla,$fot1,$fot2){
        $this->legajo=$leg;
        $this->email=$emai;
        $this->nombre=$nom;
        $this->clave=$cla;
        $rutalocal="/imag/fotos/";
        $ext=".jpeg";
        $this->foto1="$rutalocal$this->legajo-foto1$ext";
        $this->foto2="$rutalocal$this->legajo-foto2$ext";
    }
    public static function login($archivo, $legajo, $clave)
    {
        $rta=manejadorDeArchivos::buscar("usuarios.txt", 'legajo', $_GET['legajo']);
        
        if(count($rta)>0)
        {
            $claveexistente=((object)($rta[0]))->{'clave'};
            if($claveexistente == $clave)
            {
                return json_encode($rta[0]);
            }
            else
            {
                return json_encode('{"Error":"Clave incorrecta"}');
            }
        }

    }
}
?>