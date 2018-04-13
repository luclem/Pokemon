<!DOCTYPE html>
<html>
<head>
    <title>Recherche</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

</body>
</html>
<?php
include 'bdd_connect.php';

$pokemon = $_POST['nom'];

$reponse = $bdd->query('SELECT id, type FROM liste_pokemon WHERE nom=\'' . $_POST['nom'] . '\'');

while ($donnees = $reponse->fetch())
{
    echo 'Le pokémon <b>'.$pokemon.'</b> à l\'identifiant <b>'.$donnees['id'].'</b> et il est de type <b>'.$donnees['type'].'</b>';
}

$reponse->closeCursor();
?>
