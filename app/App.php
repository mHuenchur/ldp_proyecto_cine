<?php

namespace app;

use app\core\middleware\base\Handler;
use app\core\middleware\ExceptionHandler;
use app\core\middleware\AuthenticationHandler;
use app\core\middleware\AuthorizationHandler;
use app\core\middleware\RoutingHandler;

final class App{

    private function __construct(){}

    public static function run(){

        $exception = new ExceptionHandler();
        $authentication = new AuthenticationHandler();
        $authorization = new AuthorizationHandler();
        $routing = new RoutingHandler();

        $exception->setNext($authentication)->setNext($authorization)->setNext($routing);

        $exception->handle("hola");
    }
}