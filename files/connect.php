<!-- marcia-tobias student number 2985044. -->
<!-- lucas-virgarinho student number 2989295. -->

<!-- Connection with local database. -->
<?php
// using variables to store information for the connection.
DEFINE('DB_USERNAME', 'root');
DEFINE('DB_PASSWORD', 'root');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_DATABASE', 'language_fluent');

// passing variables to another variable.
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// if the connection failure, it will show exactly which error.
if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
}

// it will print a message when the connection was successful.
//echo 'Connected successfully.';

// it will close the connection.
//$mysqli->close();


?>