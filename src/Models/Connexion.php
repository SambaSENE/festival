<?php

namespace App\Models;

use PDO;
use PDOException;

class Connexion
{
    protected const DBHOST = "localhost";
    protected const DBUSER = "root";
    protected const DBPASS = "";
    protected const DBNAME = "festival";
    private static  $connexion = null;


    private function __construct()
    {
    }

    public static function getInstance(): PDO
    {
        if (is_null(self::$connexion)) {
            $dsn = "mysql:host=" . self::DBHOST . ";dbname=" . self::DBNAME;

            try {
                self::$connexion = new PDO(
                    $dsn,
                    self::DBUSER,
                    self::DBPASS,
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                    ]
                );
            } catch (PDOException $e) {
                die("Error" . $e->getMessage());
            }

            return self::$connexion;
        }
    }
}
