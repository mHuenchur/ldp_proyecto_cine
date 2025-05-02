<?php

require_once "vendor/autoload.php";

use app\core\middleware\base\Handler;
use app\core\middleware\ExceptionHandler;
use app\core\middleware\AuthenticationHandler;
use app\core\middleware\AuthorizationHandler;

function probador(Handler $handler){

    $handler->handle("hola");
}

$exception = new ExceptionHandler();
$authentication = new AuthenticationHandler();
$Authorization = new AuthorizationHandler();


$exception->setNext($authentication)->setNext($Authorization);

probador($exception);
