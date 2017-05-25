<?php
$servername = "localhost";
$port = "3306";
$username = "limrui16_dbBeer";
$password = "Billigsteol123";
$dbName = "limrui16_billigsteol";

$conn = new mysqli($servername, $username, $password, $dbName, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$conn->set_charset("utf8");


// pass på at norske tegn vises riktig
$conn->set_charset("utf8");

// raw sql
$sql = "SELECT * FROM utesteder";
// send inn query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["navn"]. " - Avstand: " . $row["avstand"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<p>ferdig xd <?= '' ?></p





/*$host = "localhost";
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

