<?php

require 'functions.php';

class Task
{
    public $description;
    public $completed = false;

    public function __construct($description)
    {
        //Automaticamente ativado na instanciação.

        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}


/*A instância de uma classe é um objeto.
$task = new Task('Go to the store');*/

//Array de tasks
$tasks = [
    new Task('Go to the store'),
    new Task('Watch momma\'s stream'),
    new Task('Sing with momma'),
];
/*Completa a task
$task->complete();*/
var_dump($tasks);

$tasks[0]->complete();

