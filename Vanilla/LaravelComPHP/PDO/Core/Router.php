<?php

namespace App\Core;

class Router
{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        //Nova instância da mesma classe - Router
        $router = new static;

        //Traz os valores definidos no arquivo passado - $file
        require $file;

        //Retorna um objeto da classe - objeto->metodo(load()->direct()
        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        //Procura nos routes se existe uma key compatível com o uri
        if (array_key_exists($uri, $this->routes[$requestType])) {
            //Retorna o valor associado à key = PagesController@home
            //return $this->routes[$requestType][$uri];
            return $this->callAction(
            //Splat Operator (...) = Cada item do array vira um argumento da função
            //Explode vai separar a classe e o método da string para um array a partir do @
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }
        throw new Exception('No route defined for this URI.');
    }

    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (!method_exists($controller, $action)) {

            throw new Exception(
                "{$controller} does not respond to the {$action}."
            );
        }
        return $controller->$action();
    }
}

