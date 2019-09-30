<?php
$tipo = $_SERVER['REQUEST_METHOD'];

switch ($tipo) {
    case 'GET':
    switch ($_GET['caso']) {
        case 'PizzaColsultar':
           require_once "./Funciones/PizzaConsultar.php";
            break;
        
        case 'ListadoDeVentas':
        if(isset($_GET["tipo"])||isset($_GET["sabor"]))
        {
            require_once "./Funciones/listadoDeVentas.php";
        }
        else
        {
            require_once "./Funciones/listadoDeVentas1.php";
        }
            
            break;
    }
        
        break;
    
    case 'POST':
        switch ($_POST["caso"])
        {
            case 'PizzaCarga':
                require_once "./Funciones/PizzaCarga.php";
                break;
            
            case 'AltaVenta':
                require_once "./Funciones/AltaVenta.php";
                break;
           
        }
        break;

    case 'DELETE':
        require_once "./Funciones/BorrarItem.php";
        break;
}


?>