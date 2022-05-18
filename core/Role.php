<?php

namespace App\Core;

class Role
{
    private Session $session;
    public function __construct(Session $session)
    {
        $this->session=$session;
    }

    public function isConnect():bool
    {
        return 0;
    }

    public function isRP():bool
    {
        return 0;
    }

    public function isAC():bool
    {
        return 0;
    }

    public function isProfesseu():bool
    {
        return 0;
    }

    public function isEtudinat():bool
    {
        return 0;
    }
}