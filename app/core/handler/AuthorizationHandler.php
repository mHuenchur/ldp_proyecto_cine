<?php

namespace app\core\handler;
use app\core\handler\base\AbstractHandler;
use app\libs\request\Request;
use app\libs\response\Response;

class AuthorizationHandler extends AbstractHandler{

    public function handle(Request $request, Response $response)
    {
        
        if(isset($_SESSION["token"]) && $_SESSION["token"] === APP_TOKEN){
            //print_r($request->getController());
            $contAdmitidosOperador = ["operador", "cartelera", "funcion", "autenticacion"];
            $contAdmitidosAdministrador = ["administrador", "sala", "pelicula", "usuario", "autenticacion"];
            $contAdmitidosExterno = ["externo", "autenticacion"];
            if ($_SESSION["perfil"] == "administrador" && !in_array($request->getController(), $contAdmitidosAdministrador)) {
                throw new \Exception("ACCESO DENEGADO PARA ADMINISTRADOR");
            } else {
                if ($_SESSION["perfil"] == "operador" && !in_array($request->getController(), $contAdmitidosOperador)) {
                    throw new \Exception("ACCESO DENEGADO PARA OPERADOR");
                } else {
                    if ($_SESSION["perfil"] == "externo" && !in_array($request->getController(), $contAdmitidosExterno)) {
                        throw new \Exception("ACCESO DENEGADO PARA EXTERNO");
                    }
                }
                
            }
        }


        return parent::handle($request, $response);
    }
}