<!-- marcia-tobias student number 2985044. -->
<!-- lucas-virgarinho student number 2989295. -->

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "language_fluent";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nameInstitution = $_POST['keyword'];
$resultInstitution = "SELECT * FROM Institution WHERE name LIKE '%$nameInstitution%' ";



$result = mysqli_query($conn, $resultInstitution);

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<br> 
                   id: ". $row["messageID"].
            " - Name: ". $row["name"].
            " - Email ". $row["email"].
            "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();