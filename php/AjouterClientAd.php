<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</head>
<body>
<title>Ajouter Client</title>
<?php
require('fonctions.php');
?>

<?php
// Etape 1 : Connexion au serveur
$bdd = getDataBase();

$pays = null;
if ($bdd) {
    $pays = getCountries($bdd);
}
?>

<!-- Formulaire de recherche -->
<form action="addClient.php" method="post" class="">

    <div class="form-group">
        <label for="civ">Civilité : </label>
        <input type="text" name="civ"  value="" placeholder="Monsieur">
    </div>

    <div class="form-group">
    <label for="nom">Nom : </label>
        <input type="text" name="nom"  value="" placeholder="Holmes">
    </div>

    <div class="form-group">
    <label for="prenom">Prénom : </label>
        <input type="text" name="prenom"  value="" placeholder="John">
    </div>

    <div class="form-group">
    <label for="adresse">Adresse : </label>
        <input type="text" name="adresse" value="" placeholder="221 B Baker Street">
    </div>

    <div class="form-group">
    <label for="cp">Code Postal : </label>
    <input type="text" name="cp" value="" placeholder="NW1">
    </div>

    <div class="form-group">
    <label for="ville">Ville : </label>
    <input type="text" name="ville" value="" placeholder="Londres">
    </div>

    <div class="form-group">
    <label>Pays:
        <select name="paysid" class="form-control">
            <option value=''>Pays</option>
            <?php
            if ($pays) {
                foreach ($pays as $pay) {
                    $option = '<option value="' . $pay->id . '"';
                    $option .= '>' . $pay->nom . '</option>';
                    echo $option;
                }
            }
            ?>
        </select>
    </label>
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
</form>


</body>
</html>