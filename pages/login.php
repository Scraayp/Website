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
    <link rel="stylesheet" href="../styles/loginStyle.css">
</head>
<body>
<main>
    <?php
    include('/inetpub/wwwroot/Praktijk/Thema4/Opdracht/Website/functions/functions.php');
    include("/inetpub/wwwroot/Praktijk/Thema4/Opdracht/Website/includes/nav.php");
    ?>

    <?php
        if(alreadyLogin()){
            header("Location: ./info.php");
            exit();
        }
        if($_GET && $_GET['wrong']){
            echo "<div class='alert'>";
            echo "<span class='closebtn' onclick='this.parentElement.style.display=`none`;'>&times;</span>";
            echo "<strong>Fout!</strong> U heeft een verkeerde wachtwoord of gebruikersnaam ingevuld";
            echo "</div>";
        }
    ?>
    <section id="login">
        <form action="info.php" method="post">
            <div class="container">
                <label for="uname"><b>Gebruikersnaam</b></label>
                <input type="text" placeholder="Vul hier je gebruikersnaam in" name="uname" required>

                <label for="psw"><b>Wachtwoord</b></label>
                <input type="password" placeholder="Vul hier je wachtwoord in" name="psw" required>

                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Onthoud mij
                </label>
            </div>
        </form>
    </section>
</main>
</body>
</html>