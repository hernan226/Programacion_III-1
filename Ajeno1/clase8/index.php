<?php

	use Psr\Http\Message\RequestInterface as Request;
	use Psr\Http\Message\ResponseInterface as Response;
	require "vendor/autoload.php";

	$config['displayErrorDetails']= true;
	$config['addContentLengthHeader']= false;
	$app= new \Slim\App(["settings" => $config]);

	$app->get('/hola', function (Request $request, Response $response){
		$response->write("hola el que lee");
		return $response;	
	});
	$app->post('/sabe[/]' ,function (Request $request, Response $response){
		$response->write("usted sabe");
	});
	$app->put('/[fafafa]', function(Request $request, Response $response){
		$response->write("que rica esta la meme!!!!");
	});
	$app->delete('/caruso[/{nombre}]', function(Request $request, Response $response,$args)
	{
		$var=$args['nombre'];
		$response->write("se canso de perderla $var");
	});
	$app->group('/amigos', function(){
	$this->get('[/]', function(Request $request, Response $response){
		$response->write("amigos son los huevos y se chocan");
	});
	$this->get('/1millon', function(Request $request, Response $response)
	{
		$response->write("Aguanta Roberto carlos");
	});	
	$this->post('/sonAmigos/{param}', function($request,$response,$args){

		$response->write($args['param'] ." tu eres mi amigo");
	});
	});
$app->run();
?>
