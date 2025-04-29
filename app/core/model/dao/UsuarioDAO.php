<?php

namespace app\core\model\dao;

use app\core\model\base\DAO;
use app\core\model\base\InterfaceDAO;
use app\core\model\base\InterfaceDTO;

final class UsuarioDAO extends DAO implements InterfaceDAO
{
    public function __construct()
    {
        
    }

    public function save(InterfaceDTO $object): void
    {
        
    }

    public function load(): InterfaceDTO
    {
        return  new InterfaceDTO();
    }

    public function update(InterfaceDTO $object): void
    {
        
    }

    public function delete(): void
    {
        
    }

    public function list(): array
    {
        return array();
    }
}


?>