<html>
<body>
<head>
    <link rel="stylesheet" href="Maquette_page_chambre.css">
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
            crossorigin="anonymous"></script></head>
<h1>MODIFIER</h1>
<?php
$prix ='200 €';
$description="Sèche-Cheveux
Connexion internet avec ADSL
Salle de bain avec douche
Dispositif pour l'auto-échauffementet l'air conditionné
Frigobar
Ligne de téléphone directe
Tv Satellitaire";
?>
<form action="Maquette_page_updatechambre.php" method="post">
    <div class="form-group">
        <label for="civ">prix : </label>
        <input type="text" name="prix" value="<?=$prix?>">
        <label for="nom">description: </label>
        <textarea type="text" name="Description" rows="8" cols="40"><?= $description ?></textarea><br />
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
</body>
</html>
