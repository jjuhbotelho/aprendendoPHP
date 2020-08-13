<?php


class Router
{
    protected $routes = [];

    public static function load($file)
    {
        //Nova instância da mesma classe - Router
        $router = new static;

        //Traz os valores definidos no arquivo passado - $file
        require $file;

        //Retorna um objeto da classe - objeto->metodo(load()->direct()
        return $router;
    }

    //Define as rotas do projeto
    public function define(array $routes)
    {
        //Atribui as rotas recebidas à variável routes
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        //Procura nos routes se existe uma key compatível com o uri
        if (array_key_exists($uri, $this->routes)) {
            //Retorna o valor associado à key
            return $this->routes[$uri];
        }

        throw new Exception('No route defined for this URI.');
    }
}

