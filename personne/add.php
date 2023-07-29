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

    <h2>Add</h2>

    <form action="action_add.php" method="get">
        <label for="name">Name: </label>
        <input type="text" name="name"><br>
        <input type="submit">
    </form>
</body>

</html>