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
    <h2>Delete</h2>
    <?php
    $srv = "localhost";
    $usr = "mysql";
    $pwd = "mysql";
    $db = "lesfrichesfrancaises";

    $conn = new mysqli($srv, $usr, $pwd, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $sql = "SELECT * FROM test";
        $result = $conn->query($sql);
        $n = $result->num_rows;

        echo ("<ul>");
        for ($i = 0; $i < $n; $i++) {
            $row = $result->fetch_assoc();

            echo ("<li>" . $row["id"] . " " . $row["nom"] . "</li>");
        }
        echo ("</ul");


        $conn->close();
    }
    ?>

    <form action="action_delete.php" method="get">
        <label for="name">Name: </label>
        <input type="text" name="name"><br>
        <input type="submit">
    </form>

</body>

</html>