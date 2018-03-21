<?php

include "includes/init.php";

?>

<!doctype html>
<html>
<body>
<header><img src="http://rdemarketing.fr/wp-content/uploads/2012/08/twitter-icon-300x300.png">
</header>
<form method="post" action="publier.php">
    <input type="text" name="content" placeholder="Votre tweet..." maxlenght="235">
    <button class="twitter button" type="submit">Tweeter</button>
</form>
</body>
</html>

<?php

$req = $dbh->query("SELECT * FROM tweets");
$tweets = $req->fetchAll();

foreach($tweets as $tweet){
    echo $tweet['contain'] ."<br>";
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="script.css">
    <title>Index</title>
</head>
<body>
<br>
<a href="deconnection.php">Déconnection</a>
</body>
</html>