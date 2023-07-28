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
    <h2>Edit</h2>
    <?php

    $id = $_GET["id"];

    $srv = "localhost";
    $usr = "mysql";
    $pwd = "mysql";
    $db = "lesfrichesfrancaises";

    $conn = new mysqli($srv, $usr, $pwd, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $sql = "SELECT nom FROM test WHERE id=" . $id . ";";
        $result = $conn->query($sql);
        $n = $result->num_rows;
        $row = $result->fetch_assoc();
        $nom = $row['nom'];
        $conn->close();
    }


    echo ("The previous value of #" . $id . " is: ");
    echo ($nom);

    echo ("<form action='action_update.php' method='get'>");
    echo ("<label for='id'>id</label>");
    echo ("<input type='text' name='id' value = " . $id . "><br>");
    echo ("<label for='nom'>Enter new name : </label>");
    echo ("<input type='text' name='nom'><br>");
    echo ("<input type='submit'>");

    echo ("</form>");

    ?>











</body>

</html>