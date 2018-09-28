<!DOCTYPE html>
<html>
<body>


<?php
 $x = 5; // alcance global

 function miPrueba() {
   //Utilizando x dentro de esta función generara un error
  echo "<p> Variable x dentro de la funcion es: $x </p>"; 
 }

 miPrueba();

 echo "<p> Variable x fuera de la función es: $x </p>";


?>


</body>
</html>
