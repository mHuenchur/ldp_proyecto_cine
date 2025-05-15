<?php

namespace app\core\service;

use app\core\service\base\Service;
use app\core\service\base\InterfaceService;
use app\libs\connection\Connection;
use app\core\model\dao\SalaDAO;
use app\core\model\dto\SalaDTO;
use app\core\model\base\InterfaceDTO;


final class SalaService extends Service implements InterfaceService{
    
    public function save(array $object): void{
        $conn = Connection::get();
        $dao = new SalaDAO($conn);
        $dao->save(new SalaDTO($object));
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