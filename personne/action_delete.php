<?php
$servername = "localhost";
$username = "mysql";
$password = "mysql";
$dbname = "lesfrichesfrancaises";
// Get Arguments
$id = $_GET["id"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

    //$sql = "INSERT INTO test VALUES (NULL, '" . $name . "')";
    $sql = "DELETE FROM test WHERE id=" . $id;
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Les Friches Francaises</h1>
    <nav>
        <ul>
            <li><a href="add.php">Add</a></li>
            <li><a href="show.php">Show</a></li>
            <li><a href="edit.php">Edit</a></li>
            <li><a href="delete.php">Delete</a></li>
        </ul>
    </nav>

    <h2>Show</h2>

    <?php
    $srv = "localhost";
    $usr = "mysql";
    $pwd = "mysql";
    $db = "lesfrichesfrancaises";

    $conn = new mysqli($srv, $usr, $pwd, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {

        $sql = "DELETE FROM test WHERE id=" . $id;
        $conn->query($sql);

        $sql = "SELECT * FROM test";
        $result = $conn->query($sql);
        $n = $result->num_rows;

        echo ("<ul>");
        for ($i = 0; $i < $n; $i++) {
            $row = $result->fetch_assoc();
            $id = $row["id"];
            $nom = $row["nom"];

            echo ("<li>" . $id . " " . $nom . " <a href=./edit.php?id=" . $id . "> Edit </a>" . "<a href=./action_delete.php?id=" . $id . "> Delete </a>" . "</li>");
        }
        echo ("</ul");


        $conn->close();
    }
    ?>



</body>

</html>