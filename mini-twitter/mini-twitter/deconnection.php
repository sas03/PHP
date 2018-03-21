<?php
$titre="Déconnection";
include("includes/init.php");
session_destroy();
echo "Vous êtes à présent déconnecté";
header("Location: connection.php");
?>
<!doctype html>
<html>
<head><title>Déconnection</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="script.css">
</head>
<body>
<header><img src="http://rdemarketing.fr/wp-content/uploads/2012/08/twitter-icon-300x300.png"></header>
</body>
</html>
