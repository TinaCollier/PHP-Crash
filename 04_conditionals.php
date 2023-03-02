<?php 
    /* 
    *operators*
    < less than
    > greater than
    <= less than or equal to
    >= greater than or equal to
    == equal to
    === identical to
    != not equal to
    !== not identical to
    */

    /* If Statements
    If statement syntax
    if (condition) {
        // code to be execudted if condition is ture
    }
    */

    // $age = 20;

    // if ($age >= 18 ) {
    //     echo 'You are old enough to vote';
    // } else {
    //     echo 'You are not old enough to vote';
    // }

// $t = date("F"); // month
$t = date("H"); // hour

// if ($t < 12) {
//     echo 'Good Morning';
// } elseif ($t < 17) {
//     echo 'Good Afternoon';
// } else {
//     echo 'Good Evening';
// }

$posts = ['First Post'];

// if (!empty($posts)) {
//     echo $posts[0];
// } else {
//     echo 'No Posts';
// }

// ternary operator of above

// echo !empty($posts) ? $posts[0] : 'No Posts';

// put it in a variable

// $firstPost = !empty($posts) ? $posts[0] : 'No Posts';

// echo $firstPost;

// same as above but gives null instead of string 'no posts'

// $first_post = $posts[0] ?? null;

$fave_color = 'red';

switch($fave_color) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo 'Your favorite color is not red, blue, green';
}

