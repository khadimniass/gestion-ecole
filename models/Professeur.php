<?php
namespace App\Models;
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
    public static function findAll(): array
    {
        $sql = "SELECT * FROM ".self::$table." WHERE role like ".self::$role;
        return []; // TODO: Change the autogenerated stub
    }
}