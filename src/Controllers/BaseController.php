<?php 

namespace App\Controllers;

use App\Models\Connexion;
use PDO;

class BaseController
{
    public function getDept() : array
    {
        $connexion =  Connexion::getInstance();
        $request = "SELECT id_dept FROM departements";
        $states = $connexion->prepare($request);
        $arrayDept = $states->execute();
        $dept = $arrayDept->fetchAll();

        return $dept;

    }
}