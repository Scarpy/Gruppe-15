<?php

$port = 8889;
$username = 'root';
$password = 'root';
$name = 'billigsteol';

$connection = new PDO("mysql:host=localhost;dbname={$name};port={$port}", $username, $password);

$statement = $connection->prepare('SELECT * FROM utesteder');
$statement->execute();

$utesteder = [];

while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $utesteder[] = $row;
}

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">  
	<link href="test.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600|Roboto:300,400" rel="stylesheet">
    </head>
    
<body>
    <div id="testContainer">
        
        */ <?php $billigsteol = 'SELECT navn, pris FROM utesteder'; ?> */
        <div id="testTextwrap">
            <p>Resultat basert på avstand, aldersgrense og prisnivå</p>
        </div>
        <div id="testTextwrap2">
            <h2>Navn:/* <?= $row['navn'] ?> */</h2>
            <h2>Pris:/* <?= $row['pris'] ?> */</h2>
        </div>
        <img id="testBilde" src="Bilde/Bilde1.png">
    
    </div>