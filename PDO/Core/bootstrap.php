<?php

//Bootstrap setta todas as configurações da aplicação
App::bind('config', require 'config.php');

//Builda a QueryBuilder
App::bind('database',  new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
