<?php
    $fruits = ['apple', 'orange', 'pear'];

    // how to get length of array

    // echo count($fruits);

    // search array

    // var_dump(in_array('apple', $fruits));

    // add to array

    $fruits[] = 'banana';

    // add to end
    array_push($fruits, 'blueberry', 'cantaloup', 'strawberry');

    // add to beginning

    array_unshift($fruits, 'watermelon');

    // remove fron array
    
    // remove from end
    array_pop($fruits);

    // remove from beginning

    array_shift($fruits);

    // remove specific index

    unset($fruits[2]);

    // split into chunks of 2

    $chunked_array = array_chunk($fruits, 2);

    // print_r($chunked_array);

    // concatenate array

    $arr1 = [1,2,3];
    $arr2 = [4,5,6];

    $arr3 = array_merge($arr1, $arr2);

    // print_r($arr3);

    // spread operator

    $arr4 = [...$arr1, ...$arr2]; // same result as above

    $a = ['green', 'red', 'yellow'];
    $b = ['avacodo', 'apple', 'banana'];

    // turns a into key and b into values
    $c = array_combine($a, $b);
    // print_r($c);
    
    // retrieves only keys
    $keys = array_keys($c);
    // print_r($keys);

    // flip values and keys

    $flipped = array_flip($c);
    // print_r($flipped);

    // create numbers array of 1 to 30 (key 0, value 1)
    $numbers = range(1, 30);
    // print_r($numbers);

    // map numbers
    $new_numbers = array_map(function($number) {
        return "Number " . $number;
    }, $numbers);
    // print_r($new_numbers);

    // filter the numbers by condition
    $less_than_10 = array_filter($numbers, fn($number) => $number <= 10);
    // print_r($less_than_10);

    // adding all the numbers together
    //carry holds the return value of the previous iteration
    $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
    var_dump($sum);