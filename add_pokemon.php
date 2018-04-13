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

$nom = $_POST['nom'];
$type = $_POST['type'];

$req = $bdd->prepare('INSERT INTO liste_pokemon(nom, type) VALUES(:nom, :type)');
$req->execute(array(
    'nom' => $nom,
    'type' => $type,
));
echo "Le pokémon <b>$nom</b> de type <b>$type</b> à été ajouté";
?>
