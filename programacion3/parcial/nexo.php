<?php
$tipo = $_SERVER['REQUEST_METHOD'];

switch ($tipo) {
    case 'GET':
    switch ($_GET['caso']) {
        case 'listarUsuario':
           require_once "./Funciones/listar.php";
            break;
        
        case 'listarProducto':
        if(isset($_GET["usuario"])||isset($_GET["producto"]))
        {
            require_once "./Funciones/listarPro.php";
        }
        else
        {
            require_once "./Funciones/listarProducto.php";
        }
            
            break;
    }
        
        break;
    
    case 'POST':
        switch ($_POST["caso"])
        {
            case 'crearUsuario':
                require_once "./Funciones/crear.php";
                break;
            
            case 'login':
                require_once "./Funciones/login.php";
                break;
            case 'cargarProducto':
                require_once "./Funciones/cargarProducto.php";
                break;    
            case 'modificarProducto':
                require_once "./Funciones/modificar.php";
                break;
        }
        break;
}


?>