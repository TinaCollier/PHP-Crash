<?php
/*  $_GET and $_POST Superglobals

We can pass data through URLS and forms using these superglobals
*/

// to sanitize, add htmlspecialchars or use filter_input

// if(isset($_POST['submit'])) {
//     $name = htmlspecialchars($_POST['name']);
//     $age = htmlspecialchars($_POST['age']);
//     echo $name;
//     echo $age;
// }

if(isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name;
    echo $age;
}

// filter_var, similas above

// $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);


?>

<!-- using url or uri -->

<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?name=Tina&age=30">Click</a>

<!-- using form -->

<!-- POST form, more secure, better for blog posts or passing info -->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>