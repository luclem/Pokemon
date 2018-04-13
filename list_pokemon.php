<!DOCTYPE html>
<html>
<head>
    <title>Recherche</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<table style="width:100%">
    <tr>
        <th>Image</th>
        <th>Identifiant</th>
        <th>Nom</th>
        <th>Type</th>
    </tr>
<?php
include 'bdd_connect.php';

$reponse = $bdd->query('SELECT * FROM liste_pokemon');
$i = 0;
while ($donnees = $reponse->fetch())
{
    $i++;
    echo '<tr>';
    echo '<td><img width="40px" src="http://pokedex.p-pokemon.com/images/sprites/petit_pkmn/'.$i.'.gif"></td>';
    echo '<td>'.$donnees['id'].'</td>';
    echo '<td><a href="http://www.pokepedia.fr/'.$donnees['nom'].'">'.$donnees['nom'].'</a></td>';
    echo '<td><span class="'.$donnees['type'].'">'.$donnees['type'].'</span></td>';
    echo '</tr>';
}

$reponse->closeCursor();

?>
</table>
</body>
</html>
