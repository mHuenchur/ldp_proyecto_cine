<?php

namespace app\core\model\dto;

use app\core\model\base\InterfaceDTO;

final class CarteleraDTO implements InterfaceDTO{

     private $id, $fechaInicio, $fechaFin;

     public function __construct($data = [])
    {
        $this->setId($data["id"] ?? 0);
        $this->setFechaInicio($data["fechaInicio"] ?? "");
        $this->setFechaFin($data["fechaFin"] ?? "");
    }
      
     public function getId()
     {
          return $this->id;
     }

     public function getFechaInicio()
     {
          return $this->fechaInicio;
     }

     public function getFechaFin()
     {
          return $this->fechaFin;
     }


     public function setId($id)
     {
          $this->id = $id;
     }
     public function setFechaInicio($fechaInicio)
     {
          $this->fechaInicio = $fechaInicio;
     }

     public function setFechaFin($fechaFin)
     {
          $this->fechaFin = $fechaFin;
     }

     public function toArray(): array
     {
        return [
            "id" => $this->getId(),
            "fechaInicio" => $this->getFechaInicio(),
            "fechaFin" => $this->getFechaFin()
        ];
     }
}