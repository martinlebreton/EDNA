<?php

$variable = "Bonjour";

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
  </head>
  <body>

<h1>Premier pas en PHP 02</h1>

<h2>Insérer un fichier externe :</h2>
<?php
require_once("element.html");
?>

<h2>Insérer un autre fichier externe :</h2>
<?php
include("footer.php");
?>

  </body>
</html>
