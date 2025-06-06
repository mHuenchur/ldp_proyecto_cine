<?php

namespace app\core\controller;

use app\core\controller\base\InterfaceController;
use app\core\controller\base\Controller;
use app\core\service\CarteleraService;
use app\libs\response\Response;
use app\libs\request\Request;

final class CarteleraController extends Controller implements InterfaceController{
    
    public function __construct()
    {
        parent::__construct([
            "public/app/js/administrador/operadorController.js",
            "public/app/js/administrador/operadorService.js"
        ]);
    }

    public function index(Request $request, Response $response): void{
        $this->view = "cartelera/index.php";
        require_once APP_TEMPLATE . "template.php";
    }
    public function load(Request $request, Response $response): void{

    }

    public function create(Request $request, Response $response): void{
        $this->view = "cartelera/alta.php";
        require_once APP_TEMPLATE . "template.php";
    }

    public function save(Request $request, Response $response): void{
        
    }

    public function edit(Request $request, Response $response): void{

    }

    public function update(Request $request, Response $response): void{

    }

    public function delete(Request $request, Response $response): void{
        
    }
}