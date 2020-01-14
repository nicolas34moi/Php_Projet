<html>
<body>
<?php
require ('Personne.php');
$PersonneTest = new Personne();

$PersonneTest->nom = 'Bouchar';
$PersonneTest->prenom = 'Gerard';
$PersonneTest->numTel= '0616263646';
?>


    <form action="" method="post" class="form-group">
        <label for="nom">Nom : </label>
        <input type="text" name="nom" value="<?= $PersonneTest->nom ?>">

        <label for="prenom">Prénom : </label>
        <input type="text" name="prenom" value="<?= $PersonneTest->prenom ?>">

        <label for="numtel">Nom : </label>
        <input type="text" name="numtel" value="<?= $PersonneTest->numTel ?>">
    </form>





</body>
</html>


