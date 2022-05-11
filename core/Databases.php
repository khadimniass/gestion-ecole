<?php

namespace App\Core;

class Databases
{
private \POD $pdo;
    public function connexionBD()
    {
        $pdo=new \PDO("poo","root","","");
    }

    public function closeConnexion():void
    {
     //     $this->pdo=c
    }
}