<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$y = 10;

function miPrueba(){
  
   global $x, $y;
   $y = $x + $y;

}

miPrueba(); //Corre función
echo $y;   //salida del nuevo valor para la variable $y    



?>



</body>
</html>
