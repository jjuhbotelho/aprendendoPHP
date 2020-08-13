<?php

//Bootstrap setta todas as configurações da aplicação
$app = [];

$app['config'] = require 'config.php';

require 'Core/Router.php';
require 'Core/Request.php';
require 'Core/Database/Connection.php';
require 'Core/Database/QueryBuilder.php';

//Builda a QueryBuilder
$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);