<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
  </head>
  <body>

<h1>Premier pas en PHP 03</h1>


<h2>Utiliser une boucle :</h2>
<h3>Première boucle :</h2>
<?php

// variable $i
$i = 1;
// boucle de type while
while ($i <= 10) {
  echo "<p>Bloc N°".$i."</p>";
  $i++;
}
?>

<h3>Seconde boucle :</h2>
<?php

// variable $a
$a = 3;
// boucle de type while avec une autre syntaxe
while ($a <= 10):
    echo "<p>Bloc N°".$a."</p>";
    $a++;
endwhile;
 ?>

  </body>
</html>
