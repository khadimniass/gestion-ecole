<?php

namespace App\Controller;

use App\Core\Controller;

class RP extends Controller
{
    public function listerRP()
    {
        $rp =  \App\Models\RP::findAll();

        $this->render("RP/listes", [
            "rp" => $rp,
            "title" => "liste des Respônsable Pédagogique"
        ]);
    }

}