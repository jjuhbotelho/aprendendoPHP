<?php

/** @var $router */

$router->get('', 'Controllers/index.php');
$router->get('about', 'Controllers/about.php');
$router->get('about/culture', 'Controllers/about-culture.php');
$router->post('names', 'Controllers/add-name.php');
