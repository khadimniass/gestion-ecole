<?php

namespace App\Exception;

class PasswordsNotMath extends \Exception
{
    public $message = "les deux mots de passe ne sont pas conformes";
}