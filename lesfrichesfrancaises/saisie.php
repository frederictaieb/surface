<?php
$servername = "localhost";
$username = "mysql";
$password = "mysql";
$dbname = "lesfrichesfrancaises";

//$conn = new mysqli($servername, $username, $password, $dbname);

//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}

//$conn = mysqli_connect($servername, $username, $password, $dbname);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Friches Française</title>
    <link rel="stylesheet" href="style_fr.css">


</head>

<body>

    <h2>Les Friches Françaises</h2>

    <nav>
        <ul>
            <li><a href="./saisie.php">Saisie</a></li>
            <li><a href="./modification.php">Modification</a></li>
            <li><a href="./recherche.php">Recherche</a></li>
            <li><a href="./login.php">Login</a></li>
        </ul>
    </nav>

    <form class="" action="" method="post" autocomplete="off">
        <label for="nom">nom</label><br>
        <input type="text" id="nom" name="nom" value=""><br>

        <label for="description">Description</label><br>
        <input type="text" id="description" name="description" value=""><br><br>

        <label for="description">Adresse</label><br>
        <input type="text" id="adresse" name="adresse" value=""><br><br>

        <label for="description">Code Postal</label><br>
        <input type="text" id="cp" name="cp" value=""><br><br>

        <label for="description">Ville</label><br>
        <input type="text" id="ville" name="ville" value=""><br><br>

        <label for="description">Visite</label><br>
        <input type="text" id="date_visite" name="date_visite" value=""><br><br>

        <label for="description">Enchère</label><br>
        <input type="text" id="date_enchere" name="date_enchere"" value=""><br><br>

        <label for=" description">Surenchère</label><br>
        <input type="text" id="date_surenchere" name="date_surenchere" value=""><br><br>

        <label for="description">Mise à prix</label><br>
        <input type="text" id="prix_enchere" name="prix_enchere" value=""><br><br>

        <label for="description">Prix de vente</label><br>
        <input type="text" id="prix_vente" name="prix_vente" value=""><br><br>

        <label for="description">Frais de surenchère</label><br>
        <input type="text" id="frais_surenchere" name="frais_surenchere" value=""><br><br>

        <button type="submit" name="submit">Submit</button>
    </form>

</body>

</html>