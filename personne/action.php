<?php
$servername = "localhost";
$username = "mysql";
$password = "mysql";
$dbname = "lesfrichesfrancaises";
// Get Arguments
$name = $_GET["name"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "INSERT INTO test VALUES (NULL, '" . $name . "')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
