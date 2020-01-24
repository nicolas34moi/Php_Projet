<?php
require('fonctions.php');

$query = "UPDATE clients SET civilite=:p_civ, nom=:p_nom, prenom=:p_prenom, adresse=:p_adresse WHERE id=:p_id";
$bdd = getDataBase();
$stmt=$bdd->prepare($query);
$stmt->bindParam(':p_civ',$_POST['civ']);
$stmt->bindParam(':p_nom',$_POST['nom']);
$stmt->bindParam(':p_prenom',$_POST['prenom']);
$stmt->bindParam(':p_adresse',$_POST['adresse']);
$stmt->bindParam(':p_id',$_POST['id']);
var_dump($_POST);
if($stmt->execute()){
    header('Location: ListeClientAd.php');
} else{
    echo 'Try Again !';
}