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
        </ul>
    </nav>

    <h2>Show</h2>

    <?php require("./lib/bridge.php"); ?>
    <?php $b = new Bridge(); ?>
    <?php $r = $b->selectAll() ?>
    <ul>
        <?php for ($i = 0; $i < $r->num_rows; $i++) : ?>
            <?php $row = $r->fetch_assoc(); ?>
            <?php $id = $row["id"]; ?>
            <?php $nom = $row["nom"]; ?>
            <li>
                <?php echo ($id); ?> <?php echo ($nom); ?> <a href=./edit.php?id=<?php echo ($id); ?>>Edit</a> <a href=./delete.php?id=<?php echo ($id); ?>>Delete</a>
            </li>
        <?php endfor; ?>
        <?php $b->close(); ?>
    </ul>
</body>

</html>