<?php

namespace App\Models;

use App\Models\Connexion;
use PDO;

class DepartementModel
{
    /**
     * Retourne tous les departements 
     *
     * @return array Tous les departements
     */
    public static function getDept(): array
    {
        $connexion =  Connexion::getInstance();
        $request = $connexion->prepare("SELECT id_dep ,name_dep FROM departements");
        $request->execute();
        $states = $request->fetchAll();

        return $states;
    }
}