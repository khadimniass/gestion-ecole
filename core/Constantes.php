<?php
define("ROOT", dirname(__DIR__));
class Constantes{
    public const WEB_ROOT = "http://localhost:9000/";
    public static function ROOT()
    {
        //return dirname(__DIR__);
        return str_replace("public","",$_SERVER["DOCUMENT_ROOT"]);
    }

    public static function VIEWS()
    {
        return Constantes::ROOT()."templates/";
    }

    public static function WEB_ROOT()
    {
        return $_SERVER["DOCUMENT_ROOT"];
    }
}
