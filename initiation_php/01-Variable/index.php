

<?php
// un commentaire en PHP
/* une autre méthode pour faire les commentaires */

// création d'une variable
$prenom = "Martin";

/* création d'une variable
utilisation d'une fonction PHP https://www.php.net/manual/fr/function.date.php
elle permet d'afficher une date
*/
$aujourdhui = date("d.m.y");

// création d'une variable contenant une autre variable
$phrase = "Aujourd'hui nous sommes le $aujourdhui";
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
  </head>
  <body>



<h1>Premier pas en PHP 01</h1>
<p>Bonjour <?php echo $prenom;  ?></p>
<p><?php echo $phrase;  ?></p>


  </body>
</html>
