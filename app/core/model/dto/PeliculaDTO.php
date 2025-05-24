<?php

namespace app\core\model\dto;

use app\core\model\base\InterfaceDTO;

final class PeliculaDTO  implements InterfaceDTO
{
    private $id, $nombre, $tituloOriginal, $duracion, $anioEstreno,
    $disponibilidad, $fechaIngreso, $sitioWeb, $sinopsis, $imagen, 
    $actor, $genero, $pais, $idioma, $calificacion;
    public function __construct($data = [])
    {
        $this->setId($data["id"] ?? 0);
        $this->setNombre($data["nombre"] ?? "");
        $this->setTituloOriginal($data["tituloOriginal"] ?? "");
        $this->setDuracion($data["duracion"] ?? "00:00:00");
        $this->setAnioEstreno($data["anioEstreno"] ?? "");
        $this->setDisponibilidad($data["disponibilidad"] ?? 0);
        $this->setFechaIngreso($data["fechaIngreso"] ?? "");
        $this->setSitioWeb($data["sitioWeb"] ?? "");
        $this->setSinopsis($data["sinopsis"] ?? "");
        $this->setImagen($data["imagen"] ?? "");
        $this->setActor($data["actor"] ?? "");
        $this->setGenero($data["genero"] ?? "");
        $this->setPais($data["pais"] ?? "");
        $this->setIdioma($data["idioma"] ?? "");
        $this->setCalificacion($data["calificacion"] ?? "");
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
    public function getTituloOriginal()
    {
        return $this->tituloOriginal;
    }
    public function getDuracion()
    {
        return $this->duracion;
    }
    public function getAnioEstreno()
    {
        return $this->anioEstreno;
    }
    public function getDisponibilidad()
    {
        return $this->disponibilidad;
    }
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }
    public function getSitioWeb()
    {
        return $this->sitioWeb;
    }
    public function getSinopsis()
    {
        return $this->sinopsis;
    }
    public function getImagen()
    {
        return $this->imagen;
    }
    public function getActor()
    {
        return $this->actor;
    }
    public function getGenero()
    {
        return $this->genero;
    }
    public function getPais()
    {
        return $this->pais;
    }
    public function getIdioma()
    {
        return $this->idioma;
    }
    public function getCalificacion()
    {
        return $this->calificacion;
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
    public function setTituloOriginal($tituloOriginal)
    {
        $this->tituloOriginal = $tituloOriginal;
    }
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    }
    public function setAnioEstreno($anioEstreno)
    {
        $this->anioEstreno = $anioEstreno;
    }
    public function setDisponibilidad($disponibilidad)
    {
        $this->disponibilidad = $disponibilidad;
    }
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;
    }
    public function setSitioWeb($sitioWeb)
    {
        $this->sitioWeb = $sitioWeb;
    }
    public function setSinopsis($sinopsis)
    {
        $this->sinopsis = $sinopsis;
    }
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }
    public function setActor($actor)
    {
        $this->actor = $actor;
    }
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }
    public function setPais($pais)
    {
        $this->pais = $pais;
    }
    public function setIdioma($idioma)
    {
        $this->idioma = $idioma;
    }
    public function setCalificacion($calificacion)
    {
        $this->calificacion = $calificacion;
    }


    // ** METODOS **
    public function toArray(): array{
        return [
            "id" => $this->getId(),
            "nombre" => $this->getNombre(),
            "tituloOriginal" => $this->getTituloOriginal(),
            "duracion" => $this->getDuracion(),
            "anioEstreno" => $this->getAnioEstreno(),
            "disponibilidad" => $this->getDisponibilidad(),
            "fechaIngreso" => $this->getFechaIngreso(),
            "sitioWeb" => $this->getSitioWeb(),
            "sinopsis" => $this->getSinopsis(),
            "imagen" => $this->getImagen(),
            "actor" => $this->getActor(),
            "genero" => $this->getGenero(),
            "pais" => $this->getPais(),
            "idioma" => $this->getIdioma(),
            "calificacion" => $this->getCalificacion()
        ];
    }
}