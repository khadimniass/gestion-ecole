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
    }
    public  function ac():AC
    {
        $sql = "SELECT p.* FROM".parent::table()." i, personne p
                WHERE p.id = i.ac_id
                AND p.role like 'ROLE_AC'*
                AND i.id = ?";
        return parent::findBy($sql,$this->id);
    }
    public  function anneescolaire():AnneeScollaire
    {
        $sql = "SELECT a.* FROM annee_scolaire a ,".parent::table()." i
         where a.id_=i.annee_id and i.id= ?";
        return parent::findBy($sql,$this->id);
    }


}