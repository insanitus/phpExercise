<!DOCTYPE html>
<html>
<body>


<?php
$x = 15;
$y = 20;

function Prueba(){
//Arreglos Globales
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['Y'];


}

Prueba();
echo "Utilizando Arreglos Globales";
echo "<br>";
echo $y;

?>


</body>
</html>
