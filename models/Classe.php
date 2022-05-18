<?php
namespace App\Models;
use App\Core\Model;
class Classe extends Model {
    private int $id;
    //fonctions navigationnelles
    /*ManyToMany avec Professeur*/
    public function __construct()
    {

    }
    public function professeurs():array|null
    {
        $sql = "";
        return parent::findBy($sql,$this->id);
    }
}