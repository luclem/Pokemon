<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div id="main">
<h3>Rechercher un pokémon</h3>
<form action="search_pokemon.php" method="post">
    <input type="text" placeholder="Nom du pokémon" name="nom">
    <input type="submit" value="Valider">
</form>
<h3>Ajouter un pokémon</h3>
<form action="add_pokemon.php" method="post">
    <input type="text" placeholder="Nom du pokémon" name="nom">
    <input type="text" placeholder="Type du pokémon" name="type">
    <input type="submit" value="Valider">
</form>
<br>
<a href="list_pokemon.php">Liste des pokémons dans la base de données</a>
</div>
</body>
</html>
