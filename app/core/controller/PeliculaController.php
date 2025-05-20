<?php

namespace app\core\controller;

use app\core\controller\base\InterfaceController;
use app\core\controller\base\Controller;
use app\libs\response\Response;
use app\libs\request\Request;

final class PeliculaController extends Controller implements InterfaceController{
    
    public function __construct()
    {
        parent::__construct([
            "public/app/js/administrador/administradorController.js",
            "public/app/js/administrador/administradorService.js"
        ]);
    }

    public function index(Request $request, Response $response): void{
        $this->view = "pelicula/index.php";
        require_once APP_TEMPLATE . "template.php";
    }
    public function load(Request $request, Response $response): void{

    }

    public function create(Request $request, Response $response): void{

    }

    public function save(Request $request, Response $response): void{
        $service = new PeliculaService();
        $service->save($request->getData());
        $response->setMessage("La sala se registró correctamente");
        $response->send();
    }

    public function edit(Request $request, Response $response): void{

    }

    public function update(Request $request, Response $response): void{

    }

    public function delete(Request $request, Response $response): void{
        
    }
}