<?php

function getDataBase() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=publishers;charset=utf8',
            'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $exception) {
        $bdd = null;
    }
    return $bdd;
}

function getAllStore(PDO $bdd) {
    $query = "SELECT * FROM stores";
    $statement = $bdd->query($query);
    if ($statement) {
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    return null;
}
