<?php 

namespace App\Models;

use PDO;

class Connexion
{
    private static $connecion =null;
    private const DBHOST = 'localhost';
    private  const DBNAME = "festival";
    private const DBUSER = 'root';
    private const DBPASS = '';

    public function __construct()
    {
        
    }

    /**
     * Access DATABASE
     *
     * @return PDO
     */
    public static function getInstance() : PDO
    {
        $dsn = "mysql:host=" . self::DBHOST . ";dbname=" . self::DBNAME .";charset=utf_8";
        if(self::$connecion){
            self::$connecion = new PDO($dsn , self::DBUSER , self::DBPASS ,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_CASE => PDO::CASE_LOWER,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]);
        }

        return self::$connecion;
    }
}