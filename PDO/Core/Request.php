<?php


class Request
{
    //Literalmente recebe a requisição da URI
    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}