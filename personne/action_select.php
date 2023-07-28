<?php
$srv = "localhost";
$usr = "mysql";
$pwd = "mysql";
$db = "test";

$name = $_GET["name"];

echo ("Bienvenue à toi: " . $name);

$conn = new mysqli($srv, $usr, $pwd, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "SELECT * FROM test";
    $result = $conn->query($sql);

    echo ($result->num_rows . "<br>");

    $row = $result->fetch_assoc();
    echo ("<ul>");
    echo ("<li>" . $row["id"] . "</li>");
    echo ("<li>" . $row["nom"] . "</li>");
    echo ("</ul");

    $conn->close();
}
