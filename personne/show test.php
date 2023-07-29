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
    require("./lib/class.php");

    $b = new Bridge();
    $result = $b->selectAll();

    $n = $result->num_rows;

    echo ("<ul>");
    for ($i = 0; $i < $n; $i++) {
        $row = $result->fetch_assoc();
        $id = $row["id"];
        $nom = $row["nom"];

        echo ("<li>" . $id . " " . $nom . " <a href=./edit.php?id=" . $id . "> Edit </a>" . "<a href=./action_delete.php?id=" . $id . "> Delete </a>" . "</li>");
    }
    echo ("</ul");

    $b->close();
    ?>

</body>

</html>