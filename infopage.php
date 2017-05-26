<?php

require 'core/init.php';
echo Init::header();

if (!isset($_GET['id']) && !is_numeric($_GET['id'])) {
    $error = "You need to pass an ID";
} else {
    $id = $_GET['id'];
}

// Starter queryen.
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
        echo $element->id; 
        echo $element->navn; 
        echo $element->apningstid; 
        echo $element->addresse; 
        echo '<img src="' . $element->bilde . '" alt="#"/>';

    }
    
require 'core/init.php';
echo Init::footer();
