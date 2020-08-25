<?php

require 'vendor/autoload.php';
require 'Core/bootstrap.php';

use App\Core\{Router,Request};

//Retorna o caminho do controller
Router::load('App/routes.php')
    ->direct(Request::uri(), Request::method());