<?php 

use app\core\model\dao\UsuarioDAO;
use app\core\model\dto\UsuarioDTO;
use app\libs\connection\Connection;

/* $data = ["id"=>"67", "nombre" => "Manolo","apellido" => "Pierre","nombre_usuario" => "mPierre",
"contrasena"=>"qwer123","correo"=>"mPierre@gmail.com","id_perfil"=>"2"];


try {
    $conn = new Connection();
    $pdo = $conn->get();
    $dto = new UsuarioDTO($data);
    $dao = new UsuarioDAO($pdo);
    $dao->save($dto);
    echo "Se agregó exitosamente";
} catch (\Exception $ex) {
    echo $ex->getMessage();
} */
?>
<p>autenticacion -> index</p>