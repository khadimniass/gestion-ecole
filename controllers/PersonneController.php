<?php

namespace App\Controller;

use App\Core\Controller;

class PersonneController extends Controller
{
    public function lister()
    {
        if ($this->request->isGet()){
            $this->render("personne/liste");
        }
    }
}