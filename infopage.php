<?php

require 'core/init.php';
echo Init::header();

if (!isset($_GET['id']) && !is_numeric($_GET['id'])) {
    $error = "You need to pass an ID";
    echo $error;
} else {
    $id = $_GET['id'];
}

echo '<div class="infopageContainer">';

require_once 'core/header.php';

    echo '<div class="infopageContainer-inner">';

        $query = "
            SELECT * FROM utesteder 
            WHERE id = '$id';
        ";
        $sql = $database->prepare("$query;");
        $sql->setFetchMode(PDO::FETCH_OBJ);
        $sql->execute();

        $result = $sql->fetchAll(PDO::FETCH_OBJ);

        // Kjører en loop for hvert element i som PDO henter. &id
        foreach ($result as $element) {
            $matservering = ($element->matservering == 0)? Nei : Ja;
            $studentrabatt = ($element->studentrabatt == 0)? Nei : Ja;



            echo '
                    <div class="bar-inner-left">
                        <div class="inner-left-img"></div>
                        <div class="inner-left-info">
                            <div class="inner-left-info-data"><span class="bar-info-title">Avstand </span><span class="bar-info-data">' . $element->avstand . ' meter</span></div>
                            <div class="inner-left-info-data"><span class="bar-info-title">Aldersgrense </span><span class="bar-info-data">' . $element->aldersgrense . ' år</span></div>
                            <div class="inner-left-info-data"><span class="bar-info-title">Prisnivå </span><span class="bar-info-data">' . $element->pris . ' kr</span></div>
                            <div class="inner-left-info-data"><span class="bar-info-title">Matservering </span><span class="bar-info-data">' . $matservering . '</span></div>
                            <div class="inner-left-info-data"><span class="bar-info-title">Studentrabatt </span><span class="bar-info-data">' . $studentrabatt . '</span></div>
                            <div class="inner-left-info-data"><span class="bar-info-title">Åpningstider</span><span class="bar-info-data"><span class="bar-info-data-apningstid">' . $element->apningstid . '</span></span></div>
                        </div>
                    </div>
                    <div class="bar-inner-right">
                        <div class="bar-inner-right-wrapper">
                            <div class="bar-inner-right-wrapper-img" style="background-image: url(' . $element->bilde_path . ')">

                            </div>
                        </div>
                    </div>
            ';
        }

    echo '</div>';
echo '</div>';
    
require 'core/init.php';
echo Init::footer();
