<?php

namespace app\libs\autentication;

use app\libs\connection\Connection;

final class Autentication{

    public static function login($user, $pass): void{
        //validar formato del usuario y contraseña
        $conn = Connection::get();
        $sql = "SELECT CONCAT(usuario.nombre,', ',apellido) AS usuario, usuarioID, nombreUsuario, clave, correo, perfil.nombre AS perfil FROM `usuario` INNER JOIN perfil ON usuario.perfilID = perfil.perfilID WHERE `nombreUsuario` = :nombreUsuario"; 
        $stmt = $conn->prepare($sql);
        if(!$stmt->execute(["nombreUsuario" => $user])){
            throw new \Exception("No se pudo <i>ejecutar</i> la consulta");
        }
        if($stmt->rowCount() !== 1){
            throw new \Exception("El usuario o la clave es inválido");
        }
        $cuenta = $stmt->fetch(\PDO::FETCH_OBJ);
        /*
        if(!password_verify($pass, $cuenta->clave)){
            throw new \Exception("El usuario o la clave es inválido");
        }*/
        if(!($pass === $cuenta->clave)){
            throw new \Exception("El usuario o la clave es inválido");
        }
        /*

        if($cuenta->estado !== 1){
            throw new \Exception("Su cuenta esta inactiva");
        }
            
        if($cuenta->resetear !== 0){
            throw new \Exception("Su clave ha caducado");
        }*/

        //paso las validaciones, la cuenta es valida
        //se crean las variables de sessión
        $_SESSION["token"] = APP_TOKEN;
        $_SESSION["usuario"] = $cuenta->usuario;
        $_SESSION["perfil"] = $cuenta->perfil;

    }

    public static function logout(): void{
        session_unset();
        if (ini_get("session.use_cookies")){
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params["path"],
            $params["domain"], $params["secure"], $params["httponly"]);
            }
        session_destroy();
    }

}