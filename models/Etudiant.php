<?php
namespace App\Models;
 class Etudiant extends User {
    private string $maticule;
    private string $sexe;
    private string $adresse;


    public function __construct()
    {
        parent::$role="ROLE_ETUDIANT";
    }

     /**
      * @return string
      */
     public function getMaticule(): string
     {
         return $this->maticule;
     }

     /**
      * @param string $maticule
      */
     public function setMaticule(string $maticule): void
     {
         $this->maticule = $maticule;
     }

     /**
      * @return string
      */
     public function getSexe(): string
     {
         return $this->sexe;
     }

     /**
      * @param string $sexe
      */
     public function setSexe(string $sexe): void
     {
         $this->sexe = $sexe;
     }

     /**
      * @return string
      */
     public function getAdresse(): string
     {
         return $this->adresse;
     }

     /**
      * @param string $adresse
      */
     public function setAdresse(string $adresse): void
     {
         $this->adresse = $adresse;
     }
     public function insert(): int
     {
         $sql = "INSERT INTO `". parent::table() ."` (`nom_complet`,`role`,`adresse`,`sexe`,`login`,`password`,`matricule`) VALUES (?,?,?,?,?,?,?)";
         $db=parent::database();
         $db->connexionBD();
         // $value = (condition) ? true : false;
         // $id = $id<1000 ? 1000 : "000".$id ;
        // dd($this->generateurMatricule());
         $result=$db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->adresse,$this->sexe,$this->login,$this->password,$this->generateurMatricule()]);
         $db->closeConnexion();
         return $result;
     }
     public static function findAll(): array
     {
         $sql = "SELECT * FROM " . parent::table() . " WHERE role like 'ROLE_ETUDIANT'";
         return parent::findBy($sql, []);
     }
     /**
      * @param $id
      * @return integer
      */
     public function generateurMatricule()
     {
         $nom=explode(" ",$this->getNomComplet());
         $nom="PO4".strtoupper($nom[count($nom)-1]);
         return $nom;
     }
}