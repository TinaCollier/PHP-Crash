<?php

/* Sessions

Sessions are a way to store information (in variables) to be used across multiple pages.
Unlike cookies, sessions are stored in the server.

More secure. Good place to save ids or info. 

Can use info on separate pages.

*/

session_start();
session_destroy();

//  !!issue: session not setting!!

if(isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    // normally would hash it, not save it as plain text
    $password = $_POST['password'];
    if($username == 'john' && $password == 'password') {
        $_SESSION['username'] == $username;
        header('Location: /php-crash/extras/dashboard.php');
    } else {
        echo 'Incorrect Login';
    }
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="text" name="password">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>