<!--
    Auteur: Michal Kolasa
    Aanmaakdatum: 26/04/2023 18:27

    Omschrijving: De info pagina met vrijwilligers van dierentehuis Den Bosch.
-->
<?php
    include('../functions/functions.php');
    // Start de sessie om later in het bestand sessie data te kunnen lezen
    session_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        Login - Dierentehuis Den Bosch
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
        include("../includes/nav.php");
    ?>

    <?php
        if(alreadyLogin())
        {
            header("Location: ./info.php");
            exit();
        }

//        Check of er een get wrong is dat de inlog fout is. Geef dan een alert aan op het scherm
        if(isset($_GET['wrong']))
        {
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
    <?php
        include("../includes/footer.php")
    ?>
</main>
</body>
</html>