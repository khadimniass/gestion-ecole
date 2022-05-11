<?php
namespace App\Core;
require_once ('IModel.php');
class Model implements IModel
{
    protected static string $table;
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
        // TODO: Implement delete() method.
        $sql = "delete from".self::$table."where id = $id";
        echo $sql;
        return 0;
    }

    public static function findAll(): array
    {
        // TODO: Implement findAll() method.
        $sql = "SELECT * FROM '".self::$table."'";
        echo $sql;
        return [];
    }

    public static function findById(int $id): object|null
    {
        // TODO: Implement findById() method.
        $sql = "select * from".self::$table."where id = $id";
        echo $sql;
        return null;
    }

    public static function findBy(string $sql, array $data = null, bool $single = false): object|null|array
    {
        return null;
        //TODO: Implement findBy() method.
    }
}