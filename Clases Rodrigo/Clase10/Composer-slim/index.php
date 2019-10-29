<?php

require "vendor/autoload.php";

$config["displayErrorDetails"] = true;
$config["addContentLengthHeader"] = true;
$mid1 = function($req, $response, $next){
    $response->getBody()->write("Esto pasa antes ");

    $response = $next($req, $response);

    $response->getBody()->write(" Esto pasa despues");

    return $response;
};

$app = new \Slim\App(["settings" => $config]);
$app->add($mid1);

 $app->get('/', function ( $req, $res, $args = []){
     return $res->withStatus(200)->write('GET');
 });



$app->group("/alumnos", function(){
    
    $this->get("/",function($request,$response){
       
        return $response->write("GET alumnos");
    });
    $this->post("/",function($request,$response){
       
        return $response->write("POST alumnos");
    });
    $this->put("/",function($request,$response){
       
        return $response->write("PUT alumnos");
    });
    $this->delete("/",function($request,$response){
       
        return $response->write("delete alumnos");
    });
});

$app->run();
?>