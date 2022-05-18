<?php

namespace App\Controller;

use App\Core\Controller;

class HomeController extends Controller
{
    public function home()
    {
        if ($this->request->isGet()){
            $this->render("home/home");
        }
    }
}