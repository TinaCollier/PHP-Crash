<?php 

/* Cookies

Cookies are a mechanism for storing data in the remote browser and thus tracking or idenfitying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.

DO NOT WANT SENSITIVE DATA!!!

Good for knowing first name or something, not their login info

*/

// Set Cookie : name, info passed in, how long to save the cookies (in this case 30 days)
setcookie('name', 'Tina', time() + 86400 * 30);

// check for the cookie and then use it
if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

// delete cookie - set it to the past
setcookie('name', '', time() - 86400);
