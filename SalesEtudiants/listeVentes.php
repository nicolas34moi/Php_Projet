<!DOCTYPE html>
<html>
<head>
    <title>Liste des éditeur</title>
    <?php
    require ('fonctions.php');
    ?>
</head>

<body>
<h1>Liste des ventes</h1>

<?php
// Etape 1 : Connexion au serveur
$bdd = getDataBase();

$stores = null;
if ($bdd) {
    $stores = getAllStore($bdd);
}
?>

<!-- Formulaire de recherche -->
<form action="" method="post">
    <label>Magasin:
        <select name="storeid" >
            <option value=''>Tous</option>
            <?php
            if ($stores) {
                foreach ($stores as $store) {
                    $option = '<option value="' . $store->stor_id . '"';
                    if ($storeid == $store->stor_id) {
                        $option .= ' selected ';
                    }
                    $option .= '>' . $store->stor_name . '</option>';
                    echo $option;
                }
            }
            ?>
        </select>
    </label>
    <input type="submit" value="Rechercher" />
</form>
<br >


<table border="1">
    <thead>
        <th>Nom magasin</th>
        <th>Code vente</th>
        <th>Quantité</th>
        <th>Livre</th>
        <th>Ventes HT</th>
        <th>Ventes TTC</th>
        <th></th>
    </thead>
    <tbody>
        <td>Exemple</td>
        <td>fictif</td>
        <td>à</td>
        <td>supprimer</td>
        <td>0</td>
        <td>0</td>
        <td><a href="modifierventes.php?stor_id=1&ord_num=1&title_id=1">Modifier</a></td>
        </tr>
    </tbody>
</table>

</body>
</html>