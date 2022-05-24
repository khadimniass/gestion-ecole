<?php
namespace App\Core;
class Databases
{
    /**
     * @var \PDO|null
     */
    private \PDO|null $pdo;

    /**
     * @return void
     */
    public function connexionBD():void
    {
        $this->pdo=new \PDO("mysql:host=localhost;dbname=poo_odc","admin","admin");
    }

    public function closeConnexion():void
    {
        $this->pdo=null;
    }

    /**
     * @param string $sql
     * @param array $data
     * @param bool $single
     * @return object|array|null
     */

    public function executeSelect(string $sql, array $data=[], bool $single=false):object|array|null
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($data);
        if($single){
            $result=$query->fetch(\PDO::FETCH_OBJ);
        }else{
            $result=$query->fetchAll(\PDO::FETCH_OBJ);
        }
        return $result;
    }
    /**
     * @param string $sql
     * @param array $data
     * @return int
     */
    public function executeUpdate(string $sql, array $data=[]):int
    {
        /*execute() et prepare() c'est des methodes de la class PDO*/
        $query = $this->pdo->prepare($sql);
        $query->execute($data);
        //apres une requete d'insertion, il faut retourner le dernier 'id' qui a ete genere, apres insértion
        return $query->rowCount();
    }
}