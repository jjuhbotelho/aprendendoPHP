<?php

function add($one, $two)
{
    if (!is_float($one) || !is_float($two)) {
        throw new InvalidArgumentException('Please provide a float.');
    }

    return $one + $two;
}

try {
    echo add(2, []);
} catch (InvalidArgumentException $e){
    echo 'Oh uau.';
};
