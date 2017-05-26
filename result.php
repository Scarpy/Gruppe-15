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

    echo '<div class="sqlContainer">';

    require_once 'core/header.php';

    echo '<div class="sqlresults">';

    if ($count === 0){
        echo '<span class="sqlresults-title">Ikke noe resultat på ditt søk</span>';
    } else {
        echo '<span class="sqlresults-title">Velg en bar</span>';
        foreach ($result as $element) {
            echo '
                <a href="infopage.php?' . $element->id . '"><div class="sqlresults-items">
                    <div class="sqlresults-items-img"></div>
                    <span>Navn: </span>
                    <span class="sqlresults-items-name">' . $element->navn . '</span>
                    <span>Adresse: </span>
                    <span class="sqlresults-items-adress">' . $element->adresse . '</span>
                </div></a>
            ';
        }
    }
    echo '</div>';
    echo '</div>';
    
	require 'core/init.php';
    echo Init::footer();
