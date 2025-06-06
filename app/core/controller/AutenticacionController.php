<?php

namespace app\core\controller;

use app\core\controller\base\InterfaceController;
use app\core\controller\base\Controller;
use app\libs\request\Request;
use app\libs\response\Response;
use app\libs\autentication\Autentication;

final class AutenticacionController extends Controller{

    public function __construct()
    {
        parent::__construct([
            "public/app/js/autenticacion/autenticacionController.js",
            "public/app/js/autenticacion/autenticacionService.js"
        ]);
    }

    public function index(Request $request, Response $response): void{
        $this->view = "autenticacion/index.php";
        require_once APP_TEMPLATE . "template.php";
    }
    public function register(Request $request, Response $response): void{
        $this->view = "autenticacion/register.php";
        require_once APP_TEMPLATE . "template.php";
    }
    public function passwordLost(): void{
        $this->view = "autenticacion/changePassword.php";
        require_once APP_TEMPLATE . "template.php";
    }
    public function login(Request $request, Response $response): void{
        $data = $request->getData();
        Autentication::login($data["nombreUsuario"], $data["clave"]);
        $response->setMessage("OK");
        $response->setController($_SESSION["perfil"]);

        $response->send();
    }
    public function logout(): void{
        Autentication::logout();

        $this->view = "autenticacion/logout.php";
        header("refresh:2; url=" . APP_URL . "autenticacion/index");
        require_once APP_TEMPLATE . "template.php";
    }
}