<?php

namespace app\core\controller;

use app\core\controller\base\InterfaceController;
use app\core\controller\base\Controller;

final class AdministradorController extends Controller implements InterfaceController{

    public function index(): void{
        require_once "app/resources/views/administrador/index.php";
    }
    public function load(): void{

    }

    public function create(): void{

    }

    public function save(): void{

    }

    public function edit(): void{

    }

    public function update(): void{

    }

    public function delete(): void{
        
    }
}