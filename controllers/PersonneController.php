<?php

namespace App\Controller;

use App\Core\Controller;
use App\Models\Personne;

class PersonneController extends Controller
{
    public function lister()
    {
        if ($this->request->isGet()){
            $personne=Personne::findAll();
            $i=1;
            $this->render("personne/liste",[
                "personnes" =>$personne,
                "i"=>$i
            ]);
        }
    }
}