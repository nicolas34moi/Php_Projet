<html>
<body>

<h1>Modifier une vente</h1>

<?php
require ('fonctions.php');

$sale = null;

if ($sale == null)  {
    echo "Vente non trouvée";
} else {
?>

<form action="updatevente.php" method="post">
    <label for="pub_name">Titre :</label>
    <input type="text" value=""/><br />
    <label for="pub_name">Quantité :</label>
    <input type="text" name="qty" value=""/><br />

    <input type="hidden" name="stor_id" value=""/><br />
    <input type="hidden" name="ord_num" value=""/><br />
    <input type="hidden" name="title_id" value=""/><br />

    <input type="submit" value="Valider"/>
</form>

<?php
}
?>