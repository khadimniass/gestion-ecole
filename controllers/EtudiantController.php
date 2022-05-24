<?php

namespace App\Controller;

use App\Core\Controller;
use App\Exception\PasswordsNotMath;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function listerEtudiant()
    {
        $etudiants = Etudiant::findAll();
        $this->render('etudiant/liste', [
            "titre" => "Liste des etudiant",
            "etudiants" => $etudiants
        ]);
    }

    public function creerEtudiant()
    {
        if ($this->request->isGet()){
            $this->render("etudiant/creer");
        } elseif($this->request->isPost()){
            extract($_POST);
            $etudiant = new Etudiant();
            $etudiant->setNomComplet($nomComplet);
            $etudiant->setAdresse($adress);
            $etudiant->setSexe($sexe);
            $etudiant->setLogin($login);
            $etudiant->setPassword($password);
            //echo "dans le controller etudiant <br>";
            //dd($etudiant);
            if ($password==$password2) {
                $etudiant->insert();
                $this->redirectToRoute("/listerEtudiant");
            }else{
                echo "les deux mots de passes ne sont pas conformes";
            }
        }
    }
}