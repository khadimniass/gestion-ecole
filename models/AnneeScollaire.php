<?php
namespace App\Models;
class AnneeScollaire extends  Model{
    //fonctions navigationnelles
    public  function inscription():Inscription
    {
        //return null;
        return new Inscription();
    }
}