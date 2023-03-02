<?php

/* Exceptions

PHP has an exception model similar to that of other programming languages. An exception can be thrown and caught ('catched') within PHP. Code may be surrounded in a try block, to faciliate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.

*/

function inverse($x) {
    if(!$x) {
        throw new Exception('Division by zero');
    }
    return 1/$x;
}

// echo inverse(10);

// throws fatal error
// echo inverse(0);

// need a try catch statement to prevent fatal error
try {
    echo inverse(5);
    echo inverse(0);
} catch(Exception $e) {
    echo 'Caught Exception', $e->getMessage(), ' ';
} finally {
    echo 'First finally';
}

try {
    echo inverse(0);
} catch(Exception $e) {
    echo 'Caught Exception', $e->getMessage(), ' ';
} finally {
    echo 'Second finally';
}