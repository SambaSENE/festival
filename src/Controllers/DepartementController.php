<?php

namespace App\Controllers;

use App\Models\DepartementModel;

class DepartementController
{
    public function findDept() : array
    {
        $dept = new DepartementModel();
        return $dept::getDept();
    }
}