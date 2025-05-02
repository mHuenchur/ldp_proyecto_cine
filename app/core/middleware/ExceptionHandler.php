<?php

namespace app\core\middleware;
use app\core\middleware\base\AbstractHandler;

class ExceptionHandler extends AbstractHandler{

    public function handle(string $request): ?string
    {
        /*
        if ($request === "Banana") {
            return "Monkey: I'll eat the " . $request . ".\n";
        } else {
            return parent::handle($request);
        }*/

        echo "Hola soy el Exception :) <br>\n";
        return parent::handle($request);
    }
}