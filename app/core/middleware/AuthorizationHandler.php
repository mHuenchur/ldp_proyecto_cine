<?php

namespace app\core\middleware;
use app\core\middleware\base\AbstractHandler;

class AuthorizationHandler extends AbstractHandler{

    public function handle(string $request): ?string
    {

        echo "Hola soy el Authorization :D <br>\n";
        return parent::handle($request);
    }
}