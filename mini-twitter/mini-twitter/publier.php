<!-- 
Created by Stephane Sumo
-->

<?php
include "includes/init.php";

//Poster un commentaire
if(isset($_POST['content']))
{
    $req = $dbh->prepare('INSERT INTO tweets (contain, author_id) VALUES (?,?)');
    $req->execute([$_POST['content'],$_SESSION['utilisateur-connecté']]);
    //--$req->execute(array($_POST['content'],$_SESSION['utilisateur-connecté']));
    //echo $_POST['content'];
    header("Location: index.php");
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="script.css">
    <title>Publication</title>
</head>
<body>
<header><img src="http://rdemarketing.fr/wp-content/uploads/2012/08/twitter-icon-300x300.png"></header>
<form method=post id="main">
    <input type="text" name="content" placeholder="Votre tweet..." maxlenght="280">
    <button class="twitter button" type="submit">Tweeter</button>
</form>
</body>
</html>
