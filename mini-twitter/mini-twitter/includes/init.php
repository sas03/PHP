<?php
//Démarrer une session
session_start();
//connection à la base de donnée
$dsn = 'mysql:dbname=twitter;host=127.0.0.1';
$hote = 'localhost';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
    $titre = "Connection";

} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

?>
