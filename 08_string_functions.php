<?php

$string = 'Hello World';
// get the length
echo strlen($string);

// position of the first occurence of a substring in a string
echo strpos($string, 'o');

// position of the last occurence of a substring in a string
echo strrpos($string, 'o');

// reverse string
echo strrev($string);

// convert all characters to lowercase
echo strtolower($string);

//convert all characters to uppercase
echo strtoupper($string);

// uppercase the first character of each word
echo ucwords($string);

// string replace
echo str_replace('World', 'Everyone', $string);

// return portion of a string specified by the offset and length
echo substr($string, 0, 5);
echo substr($string, 5);

// starts with 
if(str_starts_with($string, 'Hello')) {
    echo 'Yes';
}

// ends with
if(str_ends_with($string, 'ld')) {
    echo 'Yes';
}


// unsecure, browser parses, opens us up to attacks in forms
$string2 = '<h1>Hello</h1>';
echo $string2;

// passing script in form can make it unsecure
$string3 = '<script>alert(1)</script>';
// use htmlspecialchars to make script html (Same as htmlentities)
echo htmlspecialchars($string3);

// formatted strings with printf, good for outside data (% is a specifier)
printf('%s likes to %s', 'Brad', 'code');
printf('1+1=%d', 1+1); // with a number
printf('1+1=%f', 1+1); // with a float
