<?php
namespace App\Controller;

use App\Core\Controller;
use App\Models\User;

class SecurityController extends Controller
{
    public function authentification()
    {
//        echo "je suis dans le controller Security et action authentification";
        if ($this->request->isGet()){
            $this->render("security/login");
        }elseif ($this->request->isPost()){
            extract($_POST);
            $user=User::findUserByLoginPassword($username,$password);
            if ($user){
                $_SESSION['user_connect']=$user;
                return $this->redirectToRoute("listerEtudiant");
            }else{
                echo "<h3 class='alert alert-warning'> Invalides cridentials </h3>";
                $this->redirectToRoute("login");
            }
        }
    }

    public function deconnexion()
    {
        //echo "je suis dans le controller Security et action deconnexion";
        unset($_SESSION['user_connect']);
        $this->redirectToRoute("login");
    }
}