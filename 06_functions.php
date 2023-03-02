<?php 
    // function registerUser() {
    //     echo 'User registered';
    // }

    // registerUser();

    // if you need local variable to be global, put 'global' before variable within function

    // adding arguments

    function registerUser($email) {
        echo $email . ' registered';
    }
    
    registerUser('tinabear@gmail.com');

    function sum($n1, $n2) {
        // doesn't print anything
        return $n1 + $n2;
    }
    // need to add echo or make it a variable and then echo
    $number = sum(5, 6);
    echo $number;

    // add default values by making $n1 = 4, $n2 = 5 and the result will be 9 if no parameters passed in


    //anonymous functions

    $subtract = function($n1, $n2) {
        return $n1 - $n2;
    };

    echo $subtract(10, 5);

    // arrow functions
    $multiply = fn($n1, $n2) => $n1 * $n2;

    echo $multiply(9,9);