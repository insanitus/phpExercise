<!DOCTYPE html>
<html>
<body>

<?php
$x =5;
$y =10;
$z =0;

echo "El valor de X es: $x";
echo "<br>";
echo "El valor de <b> Y </b> es: $y <br> ";
echo "El valor de Z es: $z <br>";

function miPrueba(){
  global $x, $y, $z;
  $y = $x + $x + $x;

   echo "<br>"; 
   echo "La sumatoria de tres veces X es: $y <br>";
   echo "<br>";
  $z = $y * 3; 
   
   echo"El valor de Z es la multiplicación del valor de X por tres; $z <br>";
}

miPrueba();
echo "<br>";
echo "<br>";

echo "Variables globales<br>";
echo "El valor de X más uno es:  ";
echo $y+1;

echo "<br>";
echo "<br>";
echo "El valor de Z más cinco es:   ";
echo $z+5;
?>


 
</body>
</html>
