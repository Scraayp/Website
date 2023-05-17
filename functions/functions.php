<!--
    Auteur: Michal Kolasa
    Aanmaakdatum: 26/04/2023 18:27

    Omschrijving: De functie pagina
-->

<?php

$pdo = null;
//Start een connectie met de database
function startConnection()
{
    global $pdo;
    // Open de database connectie en ODBC driver
    try
    {
        $pdo = new PDO("odbc:odbc2sqlserver");
//        Gebruik de correcte database
        $pdo->query("USE loginPraktijk");
    }
    catch (PDOException $e)
    {
        echo "<h1>Database error:</h1>";
        echo $e->getMessage();
        die();
    }
}
// Uitvoeren van een query
function selectQuery($sql)
{
    global $pdo;
    // Uitvoeren van een SQl query
    try
    {
        // Query uitvoeren
        $result = $pdo->query($sql);
        return $result;
    }
    catch (PDOException $e)
    {
        echo 'Er is een probleem met ophalen bij het database ' . $e->getMessage();
        die();
    }
}
// FUNCTIE OM TE GEBRUIKER VOOR LATER. NIET VAN TOEPASSING OP DIT MOMENT
//function executeQuery($sql)
//{
//    global $pdo;
//    // Uitvoeren van een SQl query
//    try
//    {
//        // Query uitvoeren
//        $result = $pdo->prepare($sql);
//        return $result;
//    }
//    catch (PDOException $e)
//    {
//        echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
//        die();
//    }
//}

//Check of er een sessie is met de gebruiker en wachtwoord om in te loggen
function alreadyLogin()
{
    if(!isset($_SESSION["user"]) || !isset($_SESSION["psw"]))
    {
        return false;
    }
    else
    {
        return true;
    }
}

// Maak een login sessie aan met de volgende data
function createLoginSession($username, $password)
{
    $_SESSION["user"] = $username;
    $_SESSION["psw"] = $password;
}

// Verwijder de ssie en verwijs de gebruiker naar de index pagina.
function removeLoginSession()
{
    session_destroy();
    header ("Location: ./index.php");
    exit();
}
?>
