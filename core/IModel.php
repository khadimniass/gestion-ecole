<?php
//une interface ne contient que des methodes abstraites
//Pour eviter d'implementer toutes les methodes de l'Interface il faut creer une classe d'implémentation
interface IModel
{
//abstract

//instance : methodes d'objets elles seront appelés a travers l'objet directement
    public function update():int;
    public function insert():int;
//static
    public static function delete(int $id):int;
    public static function findAll():array;
    public static function findById(int $id):Object|null;
    public static function findBy(string $sql, array $data=null,bool $single=false):Object|null|array;
    //$single = false => return + element
}