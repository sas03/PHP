<?php

//query = requete
include "includes/init.php";
/*
if(isset($donnees)){
    echo $donnees['pseudo'].'<br>';
    echo $donnees['password'];
}*/
if(isset($_POST['pseudo']) and isset($_POST['password'])) {
//$reponse = $bdd->query('SELECT id FROM utilisateurs');
    $req = $dbh->prepare('SELECT id FROM utilisateurs WHERE pseudo = ? AND password = ?');
    $req->execute([$_POST['pseudo'], $_POST['password']]);

    $d = $req->fetch();

    if(isset($d['id'])) {
        $_SESSION['utilisateur-connecté'] = $d['id'];

        header("Location: index.php");
    }
    else{
        echo "mauvais mot de passe ou mauvais identifiant";
    }

//vérifie que l'utilisateur n'est pas déja connecté

    /*while ($donnees = $reponse->fetch() ){
        echo $donnees['password'];
    }*/

}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="script.css">
    <title>Connection</title>
</head>
<body>
<header><img src="http://rdemarketing.fr/wp-content/uploads/2012/08/twitter-icon-300x300.png"></header>
<form method="post" action="connection.php">
<fieldset>
    <legend>Identifiants</legend>
    <label for="pseudo">Pseudo :</label> <input name="pseudo" type="text" id="pseudo" /><br>
    <label for="password">* Mot de Passe :</label><input type="password" name="password" id="password" /><br />
    <button type="submit">Se connecter</button>
</fieldset>
</form>
Pas encore inscrit? <a href="inscription.php">S'identifier ici</a>
</body>
</html>