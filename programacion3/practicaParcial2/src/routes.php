<?php
use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
require_once "../src/usuarioApi.php";
require_once "../src/compraApi.php";
require_once "../src/MWparaAutentificar.php";
require_once "../src/MWdatosNav.php";
return function (App $app) {
    $container = $app->getContainer();
    $app->group('/usuario', function(){
        $this->post('[/]', \usuarioApi::class . ':CargarUno')->add(\MWdatosNav::class . ':GrabarDatos');
        $this->get('[/]', \usuarioApi::class . ':TraerTodos')->add(\MWparaAutentificar::class . ':VerificarUsuarioTraer')->add(\MWdatosNav::class . ':GrabarDatos');
    });
    $app->post('/login', \usuarioApi::class . ':Login')->add(\MWdatosNav::class . ':GrabarDatos');
    $app->group('/compra', function(){
        $this->post('[/]', \compraApi::class . ':CargarUno')->add(\MWparaAutentificar::class . ':VerificarLogeadoCompra')->add(\MWdatosNav::class . ':GrabarDatos');
        $this->get('[/]', \compraApi::class . ':TraerTodos')->add(\MWparaAutentificar::class . ':VerificarTraerCompra')->add(\MWdatosNav::class . ':GrabarDatos');
    });
};  
