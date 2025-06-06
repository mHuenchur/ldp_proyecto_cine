<?php

define("APP_URL", "http://localhost/ldp_proyecto_cine_huenchur/");
define("APP_URI", $_SERVER["DOCUMENT_ROOT"]. "/ldp_proyecto_cine_huenchur/app/") ;


define("APP_TEMPLATE", APP_URI . "resources/template/");
define("APP_VIEWS", APP_URI . "resources/views/");

define("APP_MODELS", APP_URI . "core/model/");
define("APP_SERVICES", APP_URI . "core/service/");

CONST APP_TOKEN = "CLAVE_SECRETA";

define("APP_DEFAULT_ACTION", "index");

if(isset($_SESSION["token"])){
    define("APP_DEFAULT_CONTROLLER", $_SESSION["perfil"]);
}else {
    define("APP_DEFAULT_CONTROLLER", "autenticacion");
}
?>