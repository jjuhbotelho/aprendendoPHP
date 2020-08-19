<?php

require 'vendor/autoload.php';
require 'Core/bootstrap.php';

//Retorna o caminho do controller
 require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());