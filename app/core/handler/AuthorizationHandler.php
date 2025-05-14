<?php

namespace app\core\handler;
use app\core\handler\base\AbstractHandler;
use app\libs\request\Request;
use app\libs\response\Response;

class AuthorizationHandler extends AbstractHandler{

    public function handle(Request $request, Response $response)
    {

        //echo "Hola soy el Authorization :D <br>\n";
        return parent::handle($request, $response);
    }
}