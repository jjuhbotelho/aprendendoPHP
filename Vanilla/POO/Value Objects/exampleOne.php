<?php

//Mutável = métodos que mudam o estado interno; Imutável é o contrário
//Ajuda na consistência, legibilidade

class Age
{
    private $age;

    public function __construct($age)
    {
        if ($age < 0 || $age > 120) {
            throw new InvalidArgumentException('É o Benjamin Button ou um vampiro, porra?');
        }

        $this->age = $age;
    }

    public function increment()
    {
        return new self($this->age + 1);
    }

    public function get()
    {
        return $this->age;
    }
}

$age = new Age(35);
$age = $age->increment();
print_r($age->get());

//function register(string $name, Age $age)
//{
//}
//
////Olha como vou roubar/haskear
//
//register('Fulana Ana', $age);