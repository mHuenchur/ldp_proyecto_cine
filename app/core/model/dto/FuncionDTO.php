<?php

namespace app\core\model\dto;

use app\core\model\base\InterfaceDTO;

final class FuncionDTO implements InterfaceDTO
{
    private $id, $peliculaID, $salaID, $carteleraID, $horaInicio,
    $duracion, $numeroFuncion, $precio;
    public function __construct($data = [])
    {
        $this->setId($data["id"] ?? "");
        $this->setPeliculaID($data["peliculaID"] ?? "");
        $this->setSalaID($data["salaID"] ?? "");
        $this->setCarteleraID($data["carteletaID"] ?? "");
        $this->setHoraInicio($data["horaInicio"] ?? "");
        $this->setDuracion($data["duracion"] ?? "");
        $this->setNumeroFuncion($data["numeroFuncion"] ?? "");
        $this->setPrecio($data["precio"] ?? "");
    }
    // ** GETTERS **
    public function getId()
    {
        return $this->id;
    }
    public function getPeliculaID()
    {
        return $this->peliculaID;
    }
    public function getSalaID()
    {
        return $this->salaID;
    }
    public function getCarteleraID()
    {
        return $this->carteleraID;
    }
    public function getHoraInicio()
    {
        return $this->horaInicio;
    }
    public function getDuracion()
    {
        return $this->duracion;
    }
    public function getNumeroFuncion()
    {
        return $this->numeroFuncion;
    }
    public function getPrecio()
    {
        return $this->precio;
    }

    // ** SETTERS **

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setPeliculaID($peliculaID)
    {
        $this->peliculaID = $peliculaID;
    }

    public function setSalaID($salaID)
    {
        $this->salaID = $salaID;
    }

    public function setCarteleraID($carteleraID)
    {
        $this->carteleraID = $carteleraID;
    }

    public function setHoraInicio($horaInicio)
    {
        $this->horaInicio = $horaInicio;
    }

    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    }

    public function setNumeroFuncion($numeroFuncion)
    {
        $this->numeroFuncion = $numeroFuncion;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    // ** METODOS **
    public function toArray(): array{
        return [
            "id" => $this->getId(),
            "peliculaID" => $this->getPeliculaID(),
            "salaID" => $this->getSalaID(),
            "carteleraID" => $this->getCarteleraID(),
            "horaInicio" => $this->getHoraInicio(),
            "duracion" => $this->duracion,
            "numeroFuncion" => $this->getNumeroFuncion(),
            "precio" => $this->getPrecio()
        ];
    }
}