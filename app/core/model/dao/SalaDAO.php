<?php

namespace app\core\model\dao;

use app\core\model\base\DAO;
use app\core\model\base\InterfaceDAO;
use app\core\model\base\InterfaceDTO;
use app\core\model\dto\SalaDTO;

final class SalaDAO extends DAO implements InterfaceDAO
{
    public function __construct($conn)
    {
        parent::__construct($conn, "sala");
    }

    public function save(InterfaceDTO $object): void
    {
        $this->validarCampos($object);
        $sql = "INSERT INTO {$this->table} VALUES (DEFAULT, :capacidad, :numeroSala, :estado)";
        $stmt = $this->conn->prepare($sql);
        $data = $object->toArray();
        unset($data["id"]);


        $stmt->execute($data);
    }

    public function load($id): InterfaceDTO
    {
        return  new InterfaceDTO();
    }

    public function update(InterfaceDTO $object): void
    {
        
    }

    public function delete($id): void
    {
        
    }

    public function list(): array
    {
        $stmt = $this->conn->prepare("SELECT * FROM sala");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_NUM);
    }
    //VALIDACIONES
    public function validarCampos(SalaDTO $object){
        if($object->getNumeroSala() == "" || $object->getCapacidad() == "" || $object->getEstado() == ""){
            throw new \Exception("Campos con valores incorrectos!");
        }
    }
    public function listBy(): array{
        $stmt = $this->conn->prepare("SELECT `salaID`, `capacidad`, `numeroSala`, `estado` FROM `sala` ORDER BY capacidad");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}


?>