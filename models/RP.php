<?php
namespace App\Models;
class RP extends User {
    public function __construct()
    {
         self::$role="ROLE_RP";
    }
    public static function findAll(): array
    {
        $sql = "SELECT * FROM ".parent::table()." WHERE role like 'ROLE_RP'";
        return parent::findBy($sql,[]); // TODO: Change the autogenerated stub
    }
}