<?php
require ('fonctions.php');


// Insertion dans la table
$query = "INSERT INTO clients(civilite, nom, prenom, adresse,codePostal,ville,pays_id)
          VALUES(:p_civ, :p_nom, :p_prenom, :p_adresse, :p_cp, :p_ville, :p_paysid)";

// Etape 1
$bdd = getDataBase();
// Etape 2.1 : prepare
$statement = $bdd->prepare($query);
// Etape 2.2 : paramètres
$statement->bindParam(':p_civ', $_POST['civ']);
$statement->bindParam(':p_nom', $_POST['nom']);
$statement->bindParam(':p_prenom', $_POST['prenom']);
$statement->bindParam(':p_adresse', $_POST['adresse']);
$statement->bindParam(':p_cp', $_POST['cp']);
$statement->bindParam(':p_ville', $_POST['ville']);
$statement->bindParam(':p_paysid', $_POST['paysid']);

// Etape 2.3 : exécution
if ($statement->execute()) {
    // Rediriger vers la page de liste des publishers
    header('Location: ListeClientAd.php');
} else {
    echo "Try Again !";
}




