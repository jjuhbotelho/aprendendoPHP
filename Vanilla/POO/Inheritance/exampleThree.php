<?php

//A classe herda um comportamento padrão, mas quando necessário poderá sobrescrever.

class AchievementType
{
    public function name()
    {
        //Achievement Type
    }

    public function difficulty()
    {
        return 'Intermediate';
    }

    public function icon()
    {

    }
}

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {

    }

    public function name()
    {
        return 'Alguma coisa';
    }
}