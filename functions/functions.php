<?php

$pdo = null;
function startConnection()
{
    global $pdo;
    // Open de database connectie en ODBC driver
    try
    {
        $pdo = new PDO("odbc:odbc2sqlserver");
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
        echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
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

function alreadyLogin(){
    if(!isset($_SESSION["user"]) || !isset($_SESSION["psw"])) {
        return false;
    } else {
        return true;
    }
}

function createLoginSession($username, $password){
    $_SESSION["user"] = $username;
    $_SESSION["psw"] = $password;
}

function removeLoginSession(){
    session_destroy();
}
?>
