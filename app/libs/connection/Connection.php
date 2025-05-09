<?php

namespace app\libs\connection;

final class Connection{
    public static function get(){
        return new \PDO(DB_DSN, DB_USER, DB_PASS);
    }
}