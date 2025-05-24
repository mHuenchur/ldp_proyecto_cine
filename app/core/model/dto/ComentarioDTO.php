<?php

namespace app\core\model\dto;

use app\core\model\base\InterfaceDTO;

final class ComentarioDTO  implements InterfaceDTO
{
    private $id, $usuarioID, $peliculaID, $texto;
    public function __construct($data = [])
    {
        $this->setId($data["id"] ?? 0);
        $this->setUsuarioID($data["usuarioID"] ?? "");
        $this->setPeliculaID($data["peliculaID"] ?? "");
        $this->setTexto($data["texto"] ?? "");
    }
    // ** GETTERS **
    public function getId()
    {
        return $this->id;
    }
    public function getUsuarioID()
    {
        return $this->usuarioID;
    }
    public function getPeliculaID()
    {
        return $this->peliculaID;
    }
    public function getTexto()
    {
        return $this->texto;
    }

    // ** SETTERS **

    public function setId($id)
    {
        $this->id = $id;
    }



    public function setUsuarioID($usuarioID)
    {
        $this->usuarioID = $usuarioID;
    }



    public function setPeliculaID($peliculaID)
    {
        $this->peliculaID = $peliculaID;
    }



    public function setTexto($texto)
    {
        $this->texto = $texto;
    }

    // ** METODOS **
    public function toArray(): array{
        return [

        ];
    }




}