<?php

namespace App\Core;
use App\Models\Professeur;
use App\Exception\{RouteNotFoundException, ControllerNotFoundException};

class Router
{
    private Request $request;
    public function __construct()
    {
        $this-> request = new Request();
    }
    private array $routes= [];

    /**
     * this function add the routes in the table
     */
    public function addRoute(string $uri, array $action)
    {
        $this->routes[$uri]=$action;
    }

    public function resolve()
    {
        $uri = "/".$this->request->getUri()[0];
        if (isset($this->routes[$uri])){
            $route = $this->routes[$uri];
            //Opération de destruction en php(8) : ça permet de faire affectation
            [$ctrClass, $action]=$this->routes[$uri]; // => $ctrClass = $route[0]; $action = $route[1]
            if (class_exists($ctrClass)&& method_exists($ctrClass,$action)){
                $clt = new $ctrClass($this->request);
                call_user_func(array($clt, $action));
            }else{
                throw new ControllerNotFoundException();
            }
        }else{
            throw new RouteNotFoundException();
        }
    }
}