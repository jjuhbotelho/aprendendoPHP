<?php

//Encapsulamento = Restrição do acesso direto aos componentes de um objeto

class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function job()
    {
        return 'software developer';
    }

    private function thingsThatKeepUpAtNight()
    {
        return 'the guy is scared to die';
    }
}

$Bob = new Person('Bob');

print_r($Bob->thingsThatKeepUpAtNight());