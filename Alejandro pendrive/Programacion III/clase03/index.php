
<?php

class personas
{
    
    public $alumnos;
    public function __construct(){
        $this->alumnos=array("alejandro","gustavo","poamela","daniel") ;
    }
    // Declaración de un método
    public function mostrarVar() {
        foreach($this->alumnos as $val){
            echo $val . "<br />";
        }
    }
}

$metodo=$_SERVER["REQUEST_METHOD"];

$personas = new personas();

if($metodo == "GET"){

    $json= json_encode($personas);
   // echo $json . "<br\>";
   get_object_vars($this);
    $jsonDecode=json_decode($json);
    
    var_dump($jsonDecode);
    echo $jsonDecode;
}

if($metodo == "POST"){


    
}

if($metodo == "PUT"){

 //ESTE MODIFICA
    
}


if($metodo == "DELETE"){

    //ESTE ELIMINA
       
   }


?>



<!--$_GET variables super globales --> 