<?php

if (!empty($_GET['length'])) {
    $passLength = $_GET['length'];
    $password = generator($passLength);
};

function generator($passLength)
{
    // Create an array containing a range of elements
    $lowerLetters = range('a', 'z');
    $upperLetters = range('A', 'Z');
    $numbers = range('0', '9');
    // Convert a string to an array
    $symbols = str_split('!?#&$%');
    // Merge one or more arrays
    $characters = array_merge($lowerLetters, $upperLetters, $numbers, $symbols);
    // Declaring of variables Password

    $password = "";


    for ($i = 0; $i < $passLength; $i++) {
        // Generate a random integer
        $randomNumber = rand(0, (count($characters) - 1));
        $password .= $characters[$randomNumber];
    }
    return $password;
};

?>