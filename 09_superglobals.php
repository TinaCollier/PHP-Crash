<?php
/* Superglobals

Built in variables that are always available in all scopes

$_GET - contains info about variables passed through a URL or a form
$_POST - contains info about variables passed through a form
$_COOKIE - contains info about variables passed through a cookie
$_SESSION - contains info abot variables passed through a session
$_SERVER - contains info about the server environment
$_ENV - contains info about the environment variables
$_FILES - contains ino about the files uploaded to the script
$_REQUEST - contains info about variables passed through the form or URL

*/

//provides info about our server
// var_dump($_SERVER);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <!-- localhost -->
    <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
    <!-- get document root -->
    <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
    <li>System Root: <?php echo $_SERVER['SystemRoot']; ?></li>
    <li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></li>
    <li>Server Port: <?php echo $_SERVER['SERVER_PORT']; ?></li>
    <li>Current File Dir: <?php echo $_SERVER['PHP_SELF']; ?></li>
    <li>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></li>
    <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
    <!-- info on the client -->
    <li>Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
    <!-- clients IP address -->
    <li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
    <li>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></li>
  </ul>
</body>
</html>