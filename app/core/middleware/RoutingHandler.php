<?php

namespace app\core\middleware;
use app\core\middleware\base\AbstractHandler;

class RoutingHandler extends AbstractHandler{

    public function handle(string $request): ?string
    {
        $controllerName = 'app\\core\\controller\\AdministradorController';

        call_user_func_array(array(new $controllerName, "index"), array());

        echo "Hola soy el Routing :D <br>\n";
        return parent::handle($request);
    }
}