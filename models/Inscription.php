<?php
namespace App\Models;
class Inscription extends Model {
    //attrubuts d'instance
    //attrubuts de class
    //attrubuts navigationnels => attrubut issus des relations(associations)
    /*
     * ManyToOne
    */
    public function __construct()
    {
        self::$table="inscription";
    }
    public  function ac():AC
    {
        $sql = "SELECT p.* FROM inscription i,personne p 
                where p.id=i.ac_id 
                AND p.role like 'ROLE_AC' 
                AND i.id =".$this->id;
        //return null;
        return new AC();
    }
    public  function anneescolaire():AnneeScollaire
    {
        $sql = "SELECT a.* FROM annee_scolaire a , inscription i where a.id_=i.annee_id and i.id=".$this->id;
        //return null;
        return new AnneeScollaire();
    }


}