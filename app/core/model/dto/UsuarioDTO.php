<?php

namespace app\core\model\dto;

use app\core\model\base\InterfaceDTO;

final class UsuarioDTO  implements InterfaceDTO
{
    private $id, $nombre, $apellido, $nombre_usuario, $contrasena, $correo, $id_perfil;


public function __construct($data = [])
{
    $this->setId($data["id"] ?? 0);
    $this->setNombre($data["nombre"] ?? "");
    $this->setApellido($data["apellido"] ?? "");
    $this->setNombreUsuario($data["nombre_usuario"] ?? "");
    $this->setContrasena($data["contrasena"] ?? "");
    $this->setCorreo($data["correo"] ?? "");
    $this->setPerfilId($data["id_perfil"] ?? 0);
}

public function getId(): int{
    return $this->id;
}
public function getApellido(): string{
    return $this->apellido;
}
public function getNombre(): string{
    return $this->nombre;
}
public function getNombreUsuario(): string{
    return $this->nombre_usuario;
}
public function getCorreo(): string{
    return $this->correo;
}
public function getContrasena(): string{
    return $this->contrasena;
}
public function getPerfilId(): int{
    return $this->id_perfil;
}


// ** SETTERS **
public function setId($id): void{
    $this->id = (is_integer($id) && $id > 0) ? $id : 0;
}
public function setApellido($apellido): void{
    $this->apellido = $apellido;
}
public function setNombre($nombre): void{
    $this->nombre = $nombre;
}
public function setNombreUsuario($nombreUsuario): void{
    $this->nombre_usuario = $nombreUsuario;
}
public function setCorreo($correo): void{
    $this->correo = $correo;
}
public function setContrasena($contrasena): void{
    $this->contrasena = $contrasena;
}
public function setPerfilId($perfilId): void{
    $this->id_perfil = $perfilId;
}

// ** METODOS **
public function toArray(): array{
    return [
        "id" => $this->getId(),
        "nombre" => $this->getNombre(),
        "apellido" => $this->getApellido(),
        "nombre_usuario" => $this->getNombreUsuario(),
        "correo" => $this->getCorreo(),
        "contrasena" => $this->getContrasena(),
        "id_perfil" => $this->getPerfilId(),

    ];
}
}