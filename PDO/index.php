<?php

require 'functions.php';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'root', 'dev');
} catch (PDOException $e) {
    die($e->getMessage());
}

$statement = $pdo->prepare('select * from todos');

$statement->execute();

$tasks = ($statement->fetchAll(PDO::FETCH_OBJ));

var_dump($tasks[0]->description);

require 'index.view.php';
