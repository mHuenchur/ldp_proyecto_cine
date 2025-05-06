<?php

namespace app\core\middleware;
use app\core\middleware\base\AbstractHandler;

class ExceptionHandler extends AbstractHandler{

    public function handle(string $request): ?string
    {

        echo "Hola soy el Exception :D <br>\n";
        return parent::handle($request);
    }
}