<?php
//  *simple array*
$numbers = [1,2,3,4,5];
$fruits = array('apple', 'banana', 'pear');

// print_r($numbers);

// var_dump($numbers); // gives specific values, types, and index

// echo $fruits[1];

// *associative array*
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

// echo $colors[4];


$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

// echo $hex['blue'];

$person = [
    'first_name' => 'Tina',
    'last_name' => 'Collier',
    'email' => 'tina.greda@yahoo.com'
];

// echo $person['first_name'];

$people = [
    [
        'first_name' => 'Tina',
        'last_name' => 'Collier',
        'email' => 'tina.greda@yahoo.com'
    ],
    [
        'first_name' => 'Rich',
        'last_name' => 'Collier',
        'email' => 'rich.collier@yahoo.com'
    ],
    [
        'first_name' => 'Roman',
        'last_name' => 'Collier',
        'email' => 'roman.collier@yahoo.com'
    ]
    ];

// echo $people[1]['email'];


// turn into a json object, use json_decode to take json object apart
var_dump(json_encode($people));