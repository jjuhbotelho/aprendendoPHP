<?php


class Connection
{
    public static function make()
    {
        //Conecta no banco ou traz as exceções
        try {
            return new PDO('mysql:host=localhost;dbname=mytodo', 'root', 'dev');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
