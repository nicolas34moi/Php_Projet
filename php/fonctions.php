<?php

function getDataBase() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=neptune;charset=utf8',
            'root', 'Gim3jpqbx84', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $exception) {
        $bdd = null;
    }
    return $bdd;
}

function getAllClients(PDO $bdd, $nom) {
    $query = "SELECT * 
              FROM clients 
              WHERE nom LIKE :p_nom";
    $clients = null;
    $statement = $bdd->prepare($query);
    $nom = $nom . '%';
    $statement->bindParam(':p_nom', $nom);

    if ($statement->execute()) {
        $clients = $statement->fetchAll(PDO::FETCH_OBJ);
        // Fermeture de la ressource
        $statement->closeCursor();
    }
    return $clients;
}




function getAllRooms(PDO $bdd) {
    $query = "SELECT * FROM chambres ";
    var_dump($query);
    // Etape 1 : prépare la requête
    $statement = $bdd->prepare($query);
    // Etape 3 : exécuter la requête
    if ($statement->execute()) {
        $rooms = $statement->fetchAll(PDO::FETCH_OBJ);
        // Fermeture de la ressource
        $statement->closeCursor();
    }
    return $rooms;
}

