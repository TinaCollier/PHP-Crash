<?php

/* File Handling

file handling is the ability to read and write files on the server.
PHP has built in functions for reading and writing files

*/

$file = 'extras/users.txt';

// check to see if it actually exits
if(file_exists($file)) {
    // echo readfile($file);

    // create handle/pointer, r is read
    $handle = fopen($file, 'r');
    // create contents
    $contents = fread($handle, filesize($file));
    //close file
    fclose($handle);
    echo $contents;
} else {
    // w is write
    $handle = fopen($file, 'w');
    // line break PHP_EOL
    $contents = 'Baba' . PHP_EOL . 'Dedo' . PHP_EOL . 'Silvana';
    fwrite($handle, $contents);
    fclose($handle);
}

// !!couldn't get write to work!!