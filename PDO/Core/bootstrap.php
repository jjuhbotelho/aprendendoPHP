<?php

//Bootstrap setta todas as configurações da aplicação
App::bind('config', require 'config.php');

//Builda a QueryBuilder
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

//Helper Function
function view($name, $data = [])
{

    //Armazena a key compactada em uma variável que recebe o value
    extract($data);
    return require "Views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");https://laracasts.com/
}
