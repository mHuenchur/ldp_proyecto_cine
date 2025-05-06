<?php

namespace app\core\middleware\base;
use app\core\middleware\base\Handler;
use app\libs\request\Request;
use app\libs\response\Response;

abstract class AbstractHandler implements Handler{

    private $nextHandler;

    public function setNext(Handler $handler): Handler{

        $this->nextHandler = $handler;

        return $handler;
    }

    public function handle(Request $request, Response $response){

        if($this->nextHandler){
            return $this->nextHandler->handle($request, $response);
        }
    }

}