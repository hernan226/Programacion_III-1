<?php
require_once "../src/AutentificadorJWT.php";
require_once "../src/app/models/dato.php";
use App\Models;
use App\Models\dato;
class MWdatosNav
{
 /**
   * @api {any} /MWparaAutenticar/  Verificar Usuario
   * @apiVersion 0.1.0
   * @apiName VerificarUsuario
   * @apiGroup MIDDLEWARE
   * @apiDescription  Por medio de este MiddleWare verifico las credeciales antes de ingresar al correspondiente metodo 
   *
   * @apiParam {ServerRequestInterface} request  El objeto REQUEST.
 * @apiParam {ResponseInterface} response El objeto RESPONSE.
 * @apiParam {Callable} next  The next middleware callable.
   *
   * @apiExample Como usarlo:
   *    ->add(\MWparaAutenticar::class . ':VerificarUsuario')
   */
	public function GrabarDatos($request, $response, $next) {

    $objDelaRespuesta= new stdclass();
    $objDelaRespuesta->respuesta="";
    
    $metodo=$request->getMethod();
    $ruta=$request->getUri();
    $token=$request->getHeader('token');
    if($token!=null)
    {
        $arrayConToken = $request->getHeader('token');
        $token = $arrayConToken[0];
        $data=AutentificadorJWT::ObtenerData($token);
        $usuario=$data->nombre;
    }
    else
    {
        $ArrayDeParametros = $request->getParsedBody();
        $usuario= $ArrayDeParametros['nombre'];
    }
        $hora=time();
        $hora=date('H:i:s',$hora);
        $miData = new dato();
        $miData->usuario=$usuario;
        $miData->metodo=$metodo;
        $miData->ruta=$ruta;
        $miData->hora=$hora;
        $miData->save();

        $response = $next($request, $response);
        return $response;
    }
}   