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

<header>
    <h1>Hôtel Neptune</h1>
</header>
<?php
$nom = '';
if (isset($_POST['nom'])) {
    $nom = htmlspecialchars($_POST['nom']);
}
var_dump($nom);
var_dump($_POST['nom']);
?>
<form action="" method="post" class="form-group">
    <label for="nom">Nom Client : </label>
    <input type="text" name="nom" value="<?= $nom ?>">
    <button type="submit" class="btn btn-primary">Rechercher</button>
</form>

<a href="../HTML/Maquette_Ajout_Client_Admin.php">
    <button type="button" class="btn btn-primary">Ajouter</button>
</a>
<br>
<br>
<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Civilité</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Adresse</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php
    require('fonctions.php');
    $bdd = getDataBase();
    $clients = null;
    if ($bdd) {
        $clients = getAllClients($bdd, $nom);
        if ($clients) {
            foreach ($clients as $client) {
                echo '<tr>'
                    . '<td scope="row">' . $client->civilite . '</td>'
                    . '<td>' . $client->nom . '</td>'
                    . '<td>' . $client->prenom . '</td>'
                    . '<td>' . $client->adresse . '</td>'
                    . ' <td><a href="../HTML/Maquette_Modif_Client_Admin.php"?id=' . $client->id . '><button type="button" class="btn btn-primary">Modifier</button>
            </a></td>'
                    . ' <td><a href="../HTML/Maquette_Supp_Client_Admin.php"?id=' . $client->id . '><button type="button" class="btn btn-primary">Supprimer</button>
            </a></td>'
                    . '</tr>';
            }
        }
    }
    ?>
    </tbody>
</table>

</body>
</html>