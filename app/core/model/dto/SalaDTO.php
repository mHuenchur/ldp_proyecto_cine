<?php

namespace app\core\model\dto;

use app\core\model\base\InterfaceDTO;

final class SalaDTO  implements InterfaceDTO
{
    private $id, $numeroSala, $capacidad, $estado;


public function __construct($data = [])
{
    $this->setId($data["id"] ?? "0");
    $this->setNumeroSala($data["numeroSala"] ?? "");
    $this->setCapacidad($data["capacidad"] ?? "");
    $this->setEstado($data["estado"] ?? "");
}

public function getId(): int{
    return $this->id;
}
public function getNumeroSala(): string{
    return $this->numeroSala;
}
public function getCapacidad(): string{
    return $this->capacidad;
}
public function getEstado(): string{
    return $this->estado;
}



// ** SETTERS **
public function setId($id): void{
    $this->id = (is_numeric($id) && $id > 0) ? $id : "0";
}
public function setNumeroSala($numeroSala): void{
    $this->numeroSala = ((is_numeric($numeroSala)) && (strlen($numeroSala) <= 10)) ? $numeroSala : "";
}
public function setCapacidad($capacidad): void{
    $this->capacidad = ((is_numeric($capacidad)) && (strlen($capacidad) <= 10)) ? $capacidad : "";
}
public function setEstado($estado): void{
    $this->estado = (is_numeric($estado)) && ($estado == "1" || $estado == "0") ? $estado : "";
}


// ** METODOS **
public function toArray(): array{
    return [
        "id" => $this->getId(),
        "numeroSala" => $this->getNumeroSala(),
        "capacidad" => $this->getCapacidad(),
        "estado" => $this->getEstado()
    ];
}
}