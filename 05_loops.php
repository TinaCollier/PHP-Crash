<?php

/* For Loops
    Syntax
    for (initialize; condition; increment) {
        // code to be excuted
    }
*/

// for($x = 0; $x <= 10; $x++) {
//     echo 'Number' . $x . '</br>';
// }

// result: 012345678910

/* While Loops
    Syntax
    while (condition) {
        // code to be executed
    }
*/

// $x = 1;
// while ($x <=15) {
//     echo 'Number ' . $x . '</br>';
//     // must have an increment
//     $x = $x + 1;
// }

/* Do...While Loops
    executes once before condition
    Syntax

    do {
        // code to be executed
    } while (condition)
*/

// $x = 1;

// do {
//     echo 'Number ' . $x . '</br>';
//     $x++;
// } while ($x <= 5);

/* foreach loop
    Syntax
    foreach ($array as $value) {
        // code to be executed
    }
*/

$posts = ['First Post', 'Second Post', 'Third Post'];


// for loop version
// for($x = 0; $x < count($posts); $x++) {
//     echo $posts[$x];
// }

// foreach version

foreach ($posts as $post) {
    echo $post;
}

// with index

foreach ($posts as $index => $post) {
    echo $index + 1 . $post . '</br>';
}

$person = [
    'first_name' => 'Tina',
    'last_name' => 'Collier',
    'email' => 'tina.greda@yahoo.com'
];

foreach ($person as $key => $value) {
    echo "$key - $value </br>";
}