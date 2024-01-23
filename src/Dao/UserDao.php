<?php

namespace App\Dao;

use App\Models\Connexion;
use PDO;

class UserDao
{
    public function addUser(string $lastname, string $firstname, string $mail_user, string $password, int $dept, int $age)
    {

        $connection = Connexion::getInstance();


        $sql = 'INSERT INTO users  VALUES (id_user ,:lastname, :firstname, :mail_user, :pass_user,  :dept, :age )';
        $statement = $connection->prepare($sql);
        $pass = password_hash($password, PASSWORD_ARGON2I);

        $statement->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $statement->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $statement->bindParam(':mail_user', $mail_user, PDO::PARAM_STR);
        $statement->bindParam(':pass_user', $pass, PDO::PARAM_STR);
        $statement->bindParam(':dept', $dept, PDO::PARAM_INT);
        $statement->bindParam(':age', $age, PDO::PARAM_INT);


        $statement->execute();
    }

    public function  login(string $_mail, string $_pass)
    {
        $isConnect = false;

        $connexion = Connexion::getInstance();

        $sql = "SELECT mail_user ,pass_user FROM users ";
        $statement = $connexion->prepare($sql);


        $statement->execute();
        $logData = $statement->fetchAll();
        
 
       
        foreach ($logData as $key) {
           
            if ($_mail == $key->mail_user) {
                if (password_verify($_pass, $key->pass_user)) {
                    $_SESSION['user'] = $logData[0];
                    $isConnect = true;
                } else {
                    $isConnect = false;
                }
            }
        }

        return $isConnect;
    }
}
