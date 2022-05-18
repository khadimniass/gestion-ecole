<?php

namespace App\Controller;

use App\Core\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function listerUser()
    {
        $user =  User::findAll();

        $this->render("user/liste", [
            "user" => $user,
            "title" => "liste de tout les utilisateur"
        ]);
    }
}