<?php
/* 

PHP Data Types

String - Series of characters surrounded by quotes
$word - "word"
Integer - Whole numbers
$one = 1
Float - Decimal numbers
$onepointone = 1.1
Boolean - True or False
$truth = true
Array - Special variable, which can hold more than one value
$listofnum = [1,2,3]
Object - A class
NULL - Empty variable
Resource - Special variable that holds a resource

Variable Rules
1. Variables must be prefixed with $
2. Variables must stpart with a leter or the underscore character
3. Variables can't start with a number
4. Variables can only contain alpha-numeric characters and underscores
5. Variables are case-sensitive

*/

$name = "Tina"; // string
$age = 33; // int
$has_kids = true; // bool
$cash_on_hand = 20.75; // float


echo $cash_on_hand;
var_dump($cash_on_hand);
echo $name . ' is ' . $age . ' years old';
echo "$name is $age years old";

$x = '5' + '5';
var_dump($x);
echo 10 - 5;

// constants - things that are never going to change

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');
echo HOST;