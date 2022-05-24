<?php

namespace App\Core;

use App\Models\User;

class Session
{
    private User $user;

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }
    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }
    public function __construct()
    {
        if (session_status()==PHP_SESSION_NONE){
            session_start();
        }
    }

    public function set(string $key, $data)
    {
        $_SESSION[$key]=$data;
    }

    public function get(string $key)
    {
        return $_SESSION[$key];
    }

    public function getRole()
    {
        return $_SESSION['user_connect']['role'];
    }
}