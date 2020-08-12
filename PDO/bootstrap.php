<?php

$config = require 'config.php';
require 'Database/Connection.php';
require 'Database/QueryBuilder.php';

//Builda a QueryBuilder
return new QueryBuilder(
    Connection::make($config['database'])
);