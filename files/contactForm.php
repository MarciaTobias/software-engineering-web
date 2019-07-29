<!-- marcia-tobias student number 2985044. -->
<!-- lucas-virgarinho student number 2989295. -->

<?php
// Connection with database.
require('../files/connect.php');

// it will print a message when the connection was successful.
//echo 'Connected successfully.';

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Validation for the form. If user try to send a message without name, for example, the user will not be able to send it.
// We made those validation to insight of the form at HTML code.
if($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Escape user inputs for security
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $message = mysqli_real_escape_string($mysqli, $_POST['message']);

    // Attempt insert query execution
    $sql = "INSERT INTO Message (name, email, message) VALUES ('$name', '$email', '$message')";

    if(mysqli_query($mysqli, $sql)){

        // It will pop up the alert message.
        echo "<script>alert() ;</script>";
        //$messageUser = "Records added successfully.";
        //echo $messageUser;

        // it will
        header('Location: ../views/contactUs.php');
        exit();

    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
    }
}

// it will close the connection.
$mysqli->close();

?>