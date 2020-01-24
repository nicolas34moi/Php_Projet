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
<h1>Modifier un Client</h1>
<?php
require ('fonctions.php');
$client = null;
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $bdd = getDataBase();
    $client = getModifClient($bdd,$id);
    var_dump($_GET);
}
if ($client ==null){
    echo 'Client non trouvé';
}else {
    ?>


    <form action="updateClient.php" method="post">
        <div class="form-group">
            <label for="civ">Civilité : </label>
            <input type="text" name="civ" value="<?=$client->civilite?>">
            <label for="nom">Nom : </label>
            <input type="text" name="nom" value="<?=$client->nom?>">
            <label for="prenom">Prénom : </label>
            <input type="text" name="prenom" value="<?=$client->prenom?>">
            <label for="adresse">Adresse : </label>
            <input type="text" name="adresse" value="<?=$client->adresse?>">
            <input type="hidden" name="id" value="<?=$client->id?>">
            <button type="submit" class="btn btn-primary">Valider</button>
        </div>
    </form>

    <?php
}
?>
</body>
</html>

