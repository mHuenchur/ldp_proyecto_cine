<?php

namespace app\core\service;

use app\core\service\base\Service;
use app\core\service\base\InterfaceService;
use app\libs\connection\Connection;
use app\core\model\dao\PeliculaDAO;
use app\core\model\dto\PeliculaDTO;
use app\core\model\base\InterfaceDTO;


final class PeliculaService extends Service implements InterfaceService{
    
    public function save(array $object): void{
        $conn = Connection::get();
        $dao = new PeliculaDAO($conn);
        $dao->save(new PeliculaDTO($object));
    }

    public function load($id): InterfaceDTO{ 
        return new InterfaceDTO;
    }

    public function update(array $object): void{

    }

    public function delete($id): void{

    }

    public function list(): array{
        return array();
    }
}