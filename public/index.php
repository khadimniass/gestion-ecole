<?php
// show errors when there's
ini_set('display_errors', true);
ini_set('display_startup_errors', true);

require_once "../core/Constantes.php";
require_once Constantes::ROOT()."/core/fonctions.php";
require Constantes::ROOT().'/vendor/autoload.php';
require_once Constantes::ROOT()."/routes/routes.web.php";
//resolve() in Router => Errors

// les boffeur en php correspond au ob_start() && ob_get_clean()
//note dans router , instanciation du controller