<?php

require 'core/init.php';
echo Init::header();

$avstand = $_GET['avstand'];
$alder = $_GET['alder'];
$pris = $_GET['pris'];
//Åpningstid er bare å drite i hvis dere ikke er smartere på hvordan dere har satt opp databasen. Evt kan dere bare kjøre en spørring på det og ikke filtrere på det. ;) 
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

    $count = $sql->rowCount();

    $result = $sql->fetchAll(PDO::FETCH_OBJ);

    echo '<div class="sqlresults">';

    if ($count === 0){
        echo 'no results';
    } else {
        foreach ($result as $element) {
            echo '
                <a href="infopage.php?' . $element->id . '"><div class="sqlresults-items">
                    <div class="sqlresults-items-img"></div>
                    <div class="sqlresults-items-name">' . $element->navn . '</div>
                    <div class="sqlresults-items-adress">' . $element->adresse . '</div>
                </div></a>
            ';
        }
    }

    echo '</div>';
    
	require 'core/init.php';
    echo Init::footer();
