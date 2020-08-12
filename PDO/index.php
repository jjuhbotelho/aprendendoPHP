<?php

require 'Core/bootstrap.php';

 require Router::load('routes.php')
    ->direct(Request::uri());