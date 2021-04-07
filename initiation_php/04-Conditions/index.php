
<h1>Premier pas en PHP 04</h1>

<?php

// création d'une variable
$i = 3;

// création d'une nouvelle variable
$a = $i*4; // multiplication avec *

?>


<?php
// test de condition if
if( $a > 10){
  echo "i = $i et a = $a";
}
?>

<hr>

<?php
// test de condition if else
if( $i < 5){
  echo "i = $i et est plus petit que 5";
}else{
  echo "i = $i et est plus grand que 5";
}
?>
