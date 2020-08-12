<?php

//Classe para não escrever o SQL na mão toda vez.
class QueryBuilder
{
    protected $pdo;

    //
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    //O selectAll cria os objetos conforme os registros no banco.
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return ($statement->fetchAll(PDO::FETCH_CLASS));
    }
}