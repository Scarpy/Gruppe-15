<?php
$servername = "tek.westerdals.no";
$port = "3306";
$username = "limrui16_dbBeer";
$password = "Billigsteol123";
$dbName = "limrui16_billigsteol";

$conn = new mysqli($servername, $username, $password, $dbName, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$conn->set_charset("utf8");







/*$host = "tek.westerdals.no";
    $db = "limrui16_billigsteol";
    $bruker = "limrui16_dbBeer";
    $pass = "Billigsteol123";
    $port = 3306

    // Prøv å koble til databasen. Hvis problem oppstår, gi en feilmelding til bruker.
    try {
        $database = new PDO("mysql:host=$host;port=$port;dbname=$db", "$bruker", "$pass");
        $database -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected"
    } catch(PDOException $e) {
        echo "Beklager, det oppstod et problem med databasen. Gi beskjed til administrasjonen";
        exit();
    }*/ 
?>

