

<p>La barre d'adresse affiche le paramètre</p>
<?php
// récupération du ou des paramètres
$name = $_GET["name"];
$age = $_GET["age"];

// on utilise ici la concatenation
echo '<h1>Bonjour ' . $name . '!</h1>';

// on teste si la variable âge est vide ou non
if($age){
  // la variable age est renseignée
  echo "<p>$name à $age ans</p>";
} else{
  // la variable age n'est pas renseignée
  echo "<p>Je ne connais pas l'age de $name </p>";
}
?>
<p>La barre d'adresse affiche le paramètre</p>


<a href="index.php">Retour</a>
