<?php

$person = [
    'age' => 19,
    'hair' => 'preto',
    'career' => 'Dev Streamer'
];

$person['name'] = 'Júlia';
unset($person['age']);
//Homework
//Task = title, due, assigned_to, completed

$task = [
    'title' => 'Homework',
    'due' => date('d-m-Y'),
    'assigned_to' => 'Eu mesma',
    'completed' => true,
    'urgent' => true,
];

//Homework
//Adicionar outro valor booleano e fazer as alterações no HTML


//var_dump() serve para ver os valores da array
//die() serve pra parar onde foi indicado
//die(var_dump($person));

require 'index.view.php';