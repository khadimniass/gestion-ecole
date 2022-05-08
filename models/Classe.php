<?php
class Classe extends Model {
    //fonctions navigationnelles
    /*ManyToMany avec Professeur*/
    public function __construct()
    {
        self::$table="classe";
    }

    public function professeurs():array
    {
        return  [];
    }

}