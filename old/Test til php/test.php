<?php
$servername = "tek.westerdals.no";
$port = "3306";
$username = "limrui16_dbBeer";
$password = "Billigsteol123";
$dbName = "limrui16_billigsteol";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

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