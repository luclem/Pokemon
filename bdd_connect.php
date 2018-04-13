<?php

$server = 'localhost';
$database = 'pokemon';
$username = 'root';
$password = 'root';

try
{
    $bdd = new PDO('mysql:host='.$server.';dbname='.$database.';charset=utf8', ''.$username.'', ''.$password.'');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>
