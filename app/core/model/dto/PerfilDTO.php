<?php

namespace app\core\model\dto;

use app\core\model\base\InterfaceDTO;

final class PerfilDTO implements InterfaceDTO
{
    private $id, $nombre;
    public function __construct($data = [])
    {
        $this->setId($data["id"] ?? "");
        $this->setNombre($data["nombre"] ?? "");
    }
    // ** GETTERS **
    public function getId()
    {
        return $this->id;
    }
    public function getNombre()
    {
        return $this->nombre;
    }

    // ** SETTERS **

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    // ** METODOS **
    public function toArray(): array{
        return [
            "id" => $this->getId(),
            "nombre" => $this->getNombre()
        ];
    }
}