<?php

namespace app\core\middleware;
use app\core\middleware\base\AbstractHandler;

class AuthenticationHandler extends AbstractHandler{

    public function handle(string $request): ?string
    {

        echo "Hola soy el Authentication :D <br>\n";
        return parent::handle($request);
    }
}