<?php

//Conecta no banco ou traz as exceções
function connectToDb()
{
    try {
        return new PDO('mysql:host=localhost;dbname=mytodo', 'root', 'dev');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

//Prepared Statement que traz todos os resultados de Task
function fetchAllTask($pdo)
{
    $statement = $pdo->prepare('select * from todos');

    $statement->execute();

    return ($statement->fetchAll(PDO::FETCH_CLASS, 'Task'));
}

function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}
