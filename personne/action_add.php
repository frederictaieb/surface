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

    <?php
    $srv = "localhost";
    $usr = "mysql";
    $pwd = "mysql";
    $db = "lesfrichesfrancaises";
    // Get Arguments
    $name = $_GET["name"];
    // Create connection
    $con = new mysqli($srv, $usr, $pwd, $db);
    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    } else {
        // Add Record
        $sql = "INSERT INTO test VALUES (NULL, '" . $name . "')";
        if ($con->query($sql) === TRUE) {
            echo "<h2>Added</h2>";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }

        // Show Records
        $sql = "SELECT * FROM test";
        $result = $con->query($sql);
        $n = $result->num_rows;

        echo ("<ul>");
        for ($i = 0; $i < $n; $i++) {
            $row = $result->fetch_assoc();

            echo ("<li>" . $row["id"] . " " . $row["nom"] . "</li>");
        }
        echo ("</ul");


        $con->close();
    }
    ?>

</body>

</html>