<?php

function dd($data){
echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

//Homework
//Function that checks if a person is over or under 21 to allow her to enter the nightclub

function ageVerifier($age){

    if($age >= 20){
        echo 'Welcome to He4rtland Club';
    }else {
        echo 'GET OUT';
    }
}

ageVerifier(15);