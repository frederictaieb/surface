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
    require("../fetephplib/bridge.php");
    $b = new Bridge("localhost", "mysql", "mysql", "lesfrichesfrancaises");
    $b->set_query("INSERT INTO test(nom) VALUES (?)");
    $format = "s";
    $params = array("Bobby Van");
    $b->execute($format, $params);
    ?>

</body>

</html>