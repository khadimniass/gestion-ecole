<?php
namespace App\Models;
abstract class User extends Personne{
    protected string $login;
    protected string $password;
    //protected string $role;

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }
    /**
     * @param string $login
     */
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }
    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
    public static function findUserByLoginPassword(string $login, string $password)
    {
        return self::findBy("select * from personne where login=? and password=? ",[$login,$password]);
    }
    public static function findAll(): array
    {
        $sql = "SELECT * FROM ".parent::table()." ";
        return parent::findBy($sql); // TODO: Change the autogenerated stub
    }
}