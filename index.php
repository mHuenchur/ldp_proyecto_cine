<?php
require_once "vendor/autoload.php";
session_start();
require_once "app/config/AppConfig.php";
require_once "app/config/DBConfig.php";

use app\App;

App::run();


?>