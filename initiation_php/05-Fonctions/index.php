<h1>Premier pas en PHP 05</h1>

<h2>Fonction création et utilisation</h2>
<?php


// cette fonction affiche juste un message
function uneFonctionSimple(){
  echo "Bonjour !";
  echo "<hr/>";
}


// cette fonction nécessite 2 paramètres
function nomDeFonction($a,$b){
    echo "a = $a et b = $b ";
    echo "et le résultat de a * b est : ";
    echo $a*$b; // multiplication à l'aide de *
 }

 
?>

<h3>Première fonction</h3>
<?php
// on appelle la fonction :
uneFonctionSimple();
// on appelle une seconde fois la fonction :
uneFonctionSimple();
?>



<h3>Seconde fonction</h3>
<?php
// on appelle la fonction en ajoutant les 2 paramètres requis  :
nomDeFonction(2,4);
?>
