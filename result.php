<?php

require 'core/init.php';
echo Init::header();

$avstand = $_GET['avstand'];
$alder = $_GET['alder'];
$pris = $_GET['pris'];
//Åpningstid er bare å drite i hvis dere ikke er smartere på hvordan dere har satt opp databasen. Evt kan dere bare kjøre en spørring på det og ikke filtrere på det. ;) 
$apning = $_GET['apning'];
$mat = $_GET['mat'];
$rabatt = $_GET['rabatt'];

// Starter queryen.
    $query = "
        SELECT * FROM utesteder 
        WHERE avstand < '$avstand' 
        AND aldersgrense <= '$alder'
        AND pris <= '$pris'
        AND matservering = '$mat'
        AND studentrabatt = '$rabatt'
    ";
    $sql = $database->prepare("$query;");
    $sql->setFetchMode(PDO::FETCH_OBJ);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_OBJ);

    //echo '<pre>' . print_r($result, true) . '</pre>';

// Kjører en loop for hvert element i som PDO henter. &id
    foreach ($result as $element) {
        echo $element->navn; 
        echo '</br>';
    }

    
	require 'core/init.php';
    echo Init::footer();
