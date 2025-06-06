<?php

namespace app\core\model\dao;

use app\core\model\base\DAO;
use app\core\model\base\InterfaceDAO;
use app\core\model\base\InterfaceDTO;
use app\core\model\dto\PeliculaDTO;

final class PeliculaDAO extends DAO implements InterfaceDAO
{
    public function __construct($conn)
    {
        parent::__construct($conn, "pelicula");
    }

    public function save(InterfaceDTO $object): void
    {
        //$this->validarCampos($object);
        $sql = "INSERT INTO {$this->table} VALUES (DEFAULT, :nombre, :tituloOriginal, :duracion, :anioEstreno, :disponibilidad, 
        :fechaIngreso, :sitioWeb, :sinopsis, :imagen, :actor, :genero, :pais, :idioma, :calificacion)";
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
        return array();
    }
    //VALIDACIONES
    /* public function validarCampos(SalaDTO $object){
        if($object->getNumeroSala() == "" || $object->getCapacidad() == "" || $object->getEstado() == ""){
            throw new \Exception("Campos con valores incorrectos!");
        }
    } */
}


?>