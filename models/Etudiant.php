<?php

 class Etudiant extends User {
    private string $maticule;
    private string $sexe;
    private string $adresse;

    public function __construct()
    {
        self::$role="ROLE_ETUDIANT";
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

}