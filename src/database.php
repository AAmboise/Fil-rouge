<?php

namespace Src;

class Database
{
    private static string $user = "root";
    private static string $pass = "";
    private static string $dbname = "resa_salle";

    public static function getInstance() : \PDO
    {
        return new \PDO('mysql:host=localhost;dbname='+self::$dbname, self::$user, self::$pass);
    }
}