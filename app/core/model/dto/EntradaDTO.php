<?php

namespace app\core\model\dto;

use app\core\model\base\InterfaceDTO;

final class EntradaDTO implements InterfaceDTO
{
    private $id, $funcionID, $usuarioID, $precio, $fechaFuncion,
    $horaFuncion, $fechaVenta, $horaVenta, $numeroTicket, $anulado;
    public function __construct($data = [])
    {
        $this->setId($data["data"] ?? 0);
        $this->setFuncionID($data["funcionID"] ?? "");
        $this->setUsuarioID($data["usuarioID"] ?? "");
        $this->setPrecio($data["precio"] ?? "");
        $this->setFechaFuncion($data["fechaFuncion"] ?? "");
        $this->setHoraFuncion($data["horaFuncion"] ?? "");
        $this->setFechaVenta($data["fechaVenta"] ?? "");
        $this->setHoraVenta($data["horaVenta"] ?? "");
        $this->setNumeroTicket($data["numeroTicket"] ?? "");
        $this->setAnulado($data["anulado"] ?? 0);
    }
    // ** GETTERS **
    public function getId()
    {
        return $this->id;
    }
    public function getFuncionID()
    {
        return $this->funcionID;
    }
    public function getUsuarioID()
    {
        return $this->usuarioID;
    }
    public function getPrecio()
    {
        return $this->precio;
    }
    public function getFechaFuncion()
    {
        return $this->fechaFuncion;
    }
    public function getHoraFuncion()
    {
        return $this->horaFuncion;
    }
    public function getFechaVenta()
    {
        return $this->fechaVenta;
    }
    public function getHoraVenta()
    {
        return $this->horaVenta;
    }
    public function getNumeroTicket()
    {
        return $this->numeroTicket;
    }
    public function getAnulado()
    {
        return $this->anulado;
    }

    // ** SETTERS **

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setFuncionID($funcionID)
    {
        $this->funcionID = $funcionID;
    }

    public function setUsuarioID($usuarioID)
    {
        $this->usuarioID = $usuarioID;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    public function setFechaFuncion($fechaFuncion)
    {
        $this->fechaFuncion = $fechaFuncion;
    }

    public function setHoraFuncion($horaFuncion)
    {
        $this->horaFuncion = $horaFuncion;
    }

    public function setFechaVenta($fechaVenta)
    {
        $this->fechaVenta = $fechaVenta;
    }

    public function setHoraVenta($horaVenta)
    {
        $this->horaVenta = $horaVenta;
    }

    public function setNumeroTicket($numeroTicket)
    {
        $this->numeroTicket = $numeroTicket;
    }

    public function setAnulado($anulado)
    {
        $this->anulado = $anulado;
    }

    // ** METODOS **
    public function toArray(): array{
        return [
            "id" => $this->getId(),
            "funcionID" => $this->getFuncionID(),
            "usuarioID" => $this->getUsuarioID(),
            "precio" => $this->getPrecio(),
            "fechaFuncion" => $this->getFechaFuncion(),
            "horaFuncion" => $this->getHoraFuncion(),
            "fechaVenta" => $this->getFechaVenta(),
            "horaVenta" => $this->getHoraVenta(),
            "numeroTicket" => $this->getNumeroTicket(),
            "anulado" => $this->getAnulado()
        ];
    }
    
}