<?php

namespace App\Models;

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
        $request = $connexion->prepare("SELECT id_dept FROM departements");
        $request->execute();
        $states = $request->fetchAll();

        return $states;
    }
}