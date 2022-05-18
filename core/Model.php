<?php
namespace App\Core;
require_once ('IModel.php');
class Model implements IModel
{
    protected static string $table;
    protected static Databases|null $database=null;
    public static function database():Databases
    {
        return self::$database =new Databases();
    }
    public function getRole(){
        $class = get_called_class();
        $role = "ROLE_".strtolower($class);
        return $role;
    }
    public static function table():string
    {
        $table=get_called_class();
        $table = str_replace("App\\Models\\","",$table);
        $table = ($table=="User" or $table=="AC" or $table=="RP" or $table=="Professeur" or "Etudiant") ? "personne": strtolower($table);
        return $table;
    }
    
    public function update(): int
    {
        // TODO: Implement update() method.
        return 0;
    }

    public function insert(): int
    {
        // TODO: Implement insert() method.
        return 0;
    }
    public static function delete(int $id): int
    {
        $sql = "delete from  ".self::table()."where id = ?";
        $db = self::database();
        $db->connexionBD();
        $result=$db->executeUpdate($sql,[$id]);
        $db->closeConnexion();
        return $result;
    }

    public static function findAll(): array
    {
        // TODO: Implement findAll() method.
        $sql = "SELECT * FROM '".self::table()."'";
        $db = self::database();
        $db->connexionBD();
        $result=$db->executeSelect($sql);
        $db->closeConnexion();
        return $result;
    }

    public static function findById(int $id): object|null
    {
        // TODO: Implement findById() method.
        $db = self::database();
        $db->connexionBD();
        $sql = "select * from ".self::table()." where id = ?";
        $result=$db->executeSelect($sql,[$id]);
        $db->closeConnexion();
        return $result;
    }

    public static function findBy(string $sql, array $data = null, bool $single = false): object|null|array
    {
        //TODO: Implement findBy() method.
        $db = self::database();
        $db->connexionBD();
        $result=$db->executeSelect($sql,$data,$single);
        $db->closeConnexion();
        return $result;
    }
}