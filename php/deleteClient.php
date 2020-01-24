<?php
require ('fonctions.php');

$query= "DELETE FROM clients WHERE id=:p_id";

$bdd=getDataBase();
$stmt = $bdd->prepare($query);
$stmt->bindParam(':p_id',$_POST['id'] );
if($stmt->execute()){
    header('Location: ListeClientAd.php');
} else {
    echo 'Try Again !';
}