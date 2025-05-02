<?php

namespace app\core\middleware\base;
use app\core\middleware\base\Handler;

abstract class AbstractHandler implements Handler{

    private $nextHandler;

    public function setNext(Handler $handler): Handler{

        $this->nextHandler = $handler;

        return $handler;
    }

    public function handle(string $request): ?string{

        if($this->nextHandler){
            return $this->nextHandler->handle($request);
        }

        return null;
    }

}