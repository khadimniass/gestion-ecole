<?php

namespace App\Controller;

use App\Core\Controller;
use App\Models\Professeur;

class ProfesseurController extends Controller
{
    public function affecterClasse()
    {
        
    }

    public function listerProfesseur()
    {
     $profs = Professeur::findAll();
     $id=1;
     $this->render("professeur/professeur",[
         "title"=>"liste des professeurs",
         "professeurs"=>$profs,
         "id"=>$id
     ]);
    }

    public function creerProfesseur()
    {
        $this->render("professeur/creerProf");
    }
}