<?php

namespace App\Dao;

use App\Models\Connexion;


class UserDao
{
    public function addUser(string $lastname, string $firstname, string $mail_user, string $password, int $age, int $dept) 
    {
        
        $connection = Connexion::getInstance();

      
        $sql = 'INSERT INTO users  VALUES (id_user ,:lastname, :firstname, :mail_user, :pass_user, :age, :dept , now())';
        $statement = $connection->prepare($sql);
        $pass = password_hash($password , PASSWORD_ARGON2I);
       
        $statement->bindParam(':lastname', $lastname);
        $statement->bindParam(':firstname', $firstname);
        $statement->bindParam(':mail_user', $mail_user);
        $statement->bindParam(':pass_user', $pass);
        $statement->bindParam(':age', $age );
        $statement->bindParam(':dept', $dept);

        
       $statement->execute();
      
    }

    // public function verifEmail($_email) : bool
    // {

    // }
}
