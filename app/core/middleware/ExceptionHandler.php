<?php

namespace app\core\middleware;
use app\core\middleware\base\AbstractHandler;
use app\libs\request\Request;
use app\libs\response\Response;

class ExceptionHandler extends AbstractHandler{

    public function handle(Request $request, Response $response)
    {
        try {
            echo "Hola soy el Exception :D <br>\n";
            return parent::handle($request, $response);
        } catch (\Exception $ex) {
            $response->setError($ex->getMessage());
            $response->send();
        }
        
    }
}