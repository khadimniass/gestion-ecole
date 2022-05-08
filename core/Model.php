<?php

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
        $sql = "delete from".self::$table."where id = $id";
        // TODO: Implement delete() method.
        return 0;
    }

    public static function findAll(): array
    {
        $sql = "SELECT * FROM '".self::$table."'";
        // TODO: Implement findAll() method.
        return [];
    }

    public static function findById(int $id): object|null
    {
        $sql = "select * from".self::$table."where id = $id";
        // TODO: Implement findById() method.
        return null;
    }

    public static function findBy(string $sql, array $data = null, bool $single = false): object|null|array
    {
        // TODO: Implement findBy() method.
        return null;
    }
}