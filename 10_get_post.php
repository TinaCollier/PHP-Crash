<?php
/*  $_GET and $_POST Superglobals

We can pass data through URLS and forms using these superglobals
*/

// to preven error on load, use isset on submit button

if(isset($_POST['submit'])) {
    echo $_GET['name'];
    echo $_GET['age'];
}

?>

<!-- using url or uri -->

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Tina&age=30">Click</a>

<!-- using form -->

<!-- GET form, displays info in url, not as secure. Better for a search -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
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

