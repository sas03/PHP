<!-- 
Created by Stephane Sumo
-->
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="script.css">
</head>
<body>

<header><img src="http://rdemarketing.fr/wp-content/uploads/2012/08/twitter-icon-300x300.png"></header>

</body>

</html>
<?php
//session_start();
include "includes/init.php";

//query prepare et execute une commande directement, au contraire de prepare, puis execute. Et après la donnée peut être recupérée avec fetch

$req = $dbh->prepare('SELECT * FROM utilisateurs WHERE id=?');//prepare une commande. Le id est inconnu au départ(pour pemettre des choix)
$req->execute([$_GET['id']]);//execute la commande
//le GET recupere la valeur id en un lien url, par exemple http://localhost/mini-twitter/mini-twitter/user.php?id=2

$d = $req->fetch();//fetch une valeur id, qui peut être trouvé aléotoirement à travers les liens url
//var_dump($m);
echo "<br><br>";
var_dump($d);
//--echo '<br>'.$d[4];//après avoir choisi le id, ca affiche le 5ieme element de la ligne dépendant du id

echo "<br><br>";

$a = $dbh->query('SELECT * FROM tweets');
$b = $dbh->prepare('WHERE tweet_id=?');
header('inscription.php');


//header('user.php?id='.$_SESSION['id']);
?>

<html>

<a href="inscription.php">Click</a>

</html>
