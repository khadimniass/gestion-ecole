<?php
use App\Exception\RouteNotFoundException;
use App\Core\Router;
use App\Controller\{UserController ,EtudiantController ,ACController, RP ,SecurityController, ClasseController, PersonneController, HomeController, ProfesseurController};

$router = new Router();

$router->addRoute("/",[HomeController::class,"home"]);
$router->addRoute("/login",[SecurityController::class,"authentification"]);
$router->addRoute("/logout",[SecurityController::class,"deconnexion"]);
$router->addRoute("/classes",[ClasseController::class, "listerClasse"]);
$router->addRoute("/classes-add",[ClasseController::class, "creerClasse"]);
$router->addRoute("/personnes",[PersonneController::class, "lister"]);
$router->addRoute("/liste-professeur",[ProfesseurController::class, "listerProfesseur"]);
$router->addRoute("/creer-professeur",[ProfesseurController::class, "creerProfesseur"]);
$router->addRoute("/liste-attacher",[ACController::class, "listerAc"]);
$router->addRoute("/creer-attacher",[ACController::class, "creerAc"]);
$router->addRoute("/lister-rp",[RP::class, "listerRP"]);
$router->addRoute("/creer-rp",[ACController::class, "creerAc"]);
$router->addRoute("/listerEtudiant",[EtudiantController::class, "listerEtudiant"]);
$router->addRoute("/creerEtudiant",[EtudiantController::class, "creerEtudiant"]);
$router->addRoute("/listerUser",[UserController::class, "listerUser"]);
try {
    $router ->resolve();
}catch (RouteNotFoundException $exception){
    echo $exception->message;
}