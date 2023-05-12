<!--
    Auteur: Michal Kolasa
    Aanmaakdatum: 26/04/2023 18:27

    Omschrijving: De hoofdpagina van dierentehuis Den Bosch.
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        Home - Dierentehuis Den Bosch
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Koppeling CSS -->
    <link rel="stylesheet" href="../styles/stylesheet.css">
    <link rel="stylesheet" href="../styles/infoStyle.css">
</head>
<body>
<main>
    <?php
    include('../functions/functions.php');

    include("/inetpub/wwwroot/Praktijk/Thema4/Opdracht/Website/includes/nav.php")
    ?>

    <?php
        if(!$_POST && alreadyLogin() == false){
            header("Location: ./login.php");
            exit();
        }

        startConnection();

        $username = '';
        $password = '';

        if($_POST){
            $username = $_POST["uname"];
            $password = $_POST['psw'];
        }else if($_SESSION["user"] && $_SESSION["psw"]){
            $username = strtolower($_SESSION["user"]);
            $password = $_SESSION["psw"];
        }

        $query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
        $queryVrijwilliger = "SELECT * FROM Vrijwilligers";

        $result = selectQuery($query);


        $record = $result->fetch(PDO::FETCH_ASSOC);

        if($record){
            if($_POST && $_POST["remember"] && alreadyLogin() == false){
                createLoginSession($username, $password);
            }

            $resultVrijwilliger = selectQuery($queryVrijwilliger);
            echo "<table>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Naam:</th>";
            echo "<th>Emailadres:</th>";
            echo "<th>Telefoonnummer:</th>";
            echo "<th>Werkzaamheden:</th>";
            echo "</tr>";
            echo "</thead>";
            // Door de results heen loopen via een while
            while ($row = $resultVrijwilliger->fetch(PDO::FETCH_ASSOC))
            {
                echo "<tr>";
                echo "<td>". $row["Naam"] . "</td>";
                echo "<td>". $row["Emailadres"] . "</td>";
                echo "<td>". $row["Telefoonnummer"] . "</td>";
                echo "<td>". $row["Werkzaamheden"] . "</td>";
                echo "</tr>";
            }
            echo "</tr>";
            echo "</table>";
        }else {
            header("Location: ./login.php?wrong=true");
            exit();
        }
    ?>
</main>
</body>
</html>