<?php

namespace app\core\controller;

use app\core\controller\base\InterfaceController;
use app\core\controller\base\Controller;
use app\libs\request\Request;
use app\libs\response\Response;

final class AutenticacionController extends Controller{

    public function index(Request $request, Response $response): void{
        $this->view = "autenticacion/index.php";
        require_once APP_TEMPLATE . "template.php";
    }
    public function register(Request $request, Response $response): void{
        $this->view = "autenticacion/register.php";
        require_once APP_TEMPLATE . "template.php";
    }
    public function login(Request $request, Response $response): void{

    }
    public function logout(): void{

    }
}