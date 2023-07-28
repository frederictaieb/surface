<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "mysql";
    $password = "mysql";
    $dbname = "lesfrichesfrancaises";

    echo ("Connecting Personnne database...<br>");
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "Connected successfully!<br>";
    $sql = "SELECT * FROM biens_immobiliers";
    $result = $conn->query($sql);

    echo ($result->num_rows . "<br>");

    $row = $result->fetch_assoc();
    echo ("<ul>");
    echo ("<li>" . $row["titre"] . "</li>");
    echo ("<li>" . $row["description"] . "</li>");
    echo ("<li>" . $row["EMAIL"] . "</li>");
    echo ("</ul");
    ?>
</body>

</html>