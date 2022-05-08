<?php
class Professeur extends  Personne{


    public function __construct()
    {
        self::$role="ROLE_PROFESSEUR";
    }
    //fonctions navigationnelles
    /*ManyToMany avec classe*/
    public function classes() : array
    {
        return [];
    }

}