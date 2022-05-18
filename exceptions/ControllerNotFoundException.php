<?php
namespace App\Exception;
//this class is use in Route class
class ControllerNotFoundException extends \Exception
{
    public $message = "Cette controlleur n'existe pas !!!";
}
