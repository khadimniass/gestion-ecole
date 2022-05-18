<?php
namespace App\Controller;

use App\Core\Controller;

class SecurityController extends Controller
{
    public function authentification()
    {
//        echo "je suis dans le controller Security et action authentification";
        if ($this->request->isGet()){
            $this->render("security/login");
        }elseif ($this->request->isPost()){
                echo "traitement du formulaire de connexion ...";
                extract($_POST);
                dd($_POST);
        }
    }

    public function deconnexion()
    {
       // echo "je suis dans le controller Security et action deconnexion";
        $this->redirectToRoute("logout");
    }
}