<?php

namespace App\Controller;

use App\Core\Controller;
use App\Models\AC;

class ACController extends Controller
{
    public function listerAc()
    {
        $ac =  AC::findAll();
        $i=1;
        $this->render("AC/lister",[
            "acs" => $ac,
            "title" => "liste des Attachees",
            "i" => $i
        ]);
    }

    public function creerAc()
    {
        $this->render("RP/creer");
    }
}