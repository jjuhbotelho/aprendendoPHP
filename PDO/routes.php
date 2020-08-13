<?php

/** @var $router */
//Objeto router definido na função load da classe Router acessando o metodo define
$router->define([
    '' => 'Controllers/index.php',
    'about' => 'Controllers/about.php',
    'about/culture' => 'Controllers/about-culture.php',
    'contact' => 'Controllers/contact.php'
]);