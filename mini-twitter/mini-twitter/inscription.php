<!-- 
Created by Stephane Sumo
-->
<?php
//la methode poste n'a pas de taille limite et n'apparait pas directement
//dans l'url(il faut ajouter du code php dans la page)
//Avec la methode get, les données sont encodées dans une URL
//die = exit
include "includes/init.php";

?>

<!doctype html>
<html>
<body>

<header><img src="http://rdemarketing.fr/wp-content/uploads/2012/08/twitter-icon-300x300.png">
<meta charset="UTF-8">
<link rel="stylesheet" href="script.css">
</header>
	
<div>
<?php

    //Vérifier si le formulaire a été rempli avec !empty au lieu de empty(remplacer?)
    if (!empty($_POST['pseudo'])) {
        echo '<h1>Inscription sur mini-twitter</h1>';
    ?>
    <form method="post" action="inscription.php" enctype="multipart/form-data">
        <fieldset><legend>Identifiants</legend>
        <label for="pseudo">* Pseudo :</label>  <input name="pseudo" type="text" id="pseudo" /><br />
        <label for="password">* Mot de Passe :</label><input type="password" name="password" id="password" /><br />
        <label for="confirm">* Confirmer le mot de passe :</label><input type="password" name="confirm" id="confirm" />
        </fieldset>
        <p><input type="submit" value="S'inscrire" /></p>
    </form>
</div>
Déja inscrit? <a href="connection.php">Se Connecter</a>

<?php

if(isset($_POST['pseudo']) && ($_POST['password'] == $_POST['confirm']))
{
    $req = $dbh->prepare('INSERT INTO users (pseudo, pass) VALUES (?,?)');
    $req->execute([$_POST['pseudo'],$_POST['password']]);
    
    header("Location: index.php");
}
<footer>
    <br>
    <small>Copyrights 2017</small>
</footer>
</body>
</html>

<?php
/*if (empty($_POST['pseudo'])){
    echo '<h1>Inscription 1/2</h1>';
 *     echo '<form method="post" action="inscription.php" enctype="multipart/form-data">
	<fieldset><legend>Identifiants</legend>
	<label for="pseudo">* Pseudo :</label>  <input name="pseudo" type="text" id="pseudo" /> (le pseudo doit contenir entre 3 et 15 caractères)<br />
	<label for="password">* Mot de Passe :</label><input type="password" name="password" id="password" /><br />
	<label for="confirm">* Confirmer le mot de passe :</label><input type="password" name="confirm" id="confirm" />
	</fieldset>
	<fieldset><legend>Contacts</legend>
	<label for="email">* Votre adresse Mail :</label><input type="text" name="email" id="email" /><br />
	<label for="msn">Votre adresse MSN :</label><input type="text" name="msn" id="msn" /><br />
	<label for="website">Votre site web :</label><input type="text" name="website" id="website" />
	</fieldset>
	<fieldset><legend>Informations supplémentaires</legend>
	<label for="localisation">Localisation :</label><input type="text" name="localisation" id="localisation" />
	</fieldset>
	<fieldset><legend>Profil sur le forum</legend>
	<label for="avatar">Choisissez votre avatar :</label><input type="file" name="avatar" id="avatar" />(Taille max : 10Ko<br />
	<label for="signature">Signature :</label><textarea cols="40" rows="4" name="signature" id="signature">La signature est limitée à 200 caractères</textarea>
	</fieldset>
	<p>Les champs précédés d un * sont obligatoires</p>
	<p><input type="submit" value="S\'inscrire" /></p></form>
	</div>
	</body>
	</html>';
  }
*/
?>
