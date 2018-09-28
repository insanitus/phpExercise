<!DOCTYPE html>
<html>
<body>


<?php

 /* Una variable declarada fuera
    de la funcion 
    tiene un acceso general
    y solo puede ser accesible
    fuera de la funcion
*/


 $x = 5; // alcance global

 function miPrueba() {
   //Utilizando x dentro de esta función generara un error
  echo "<p> Variable x dentro de la funcion es: $x </p>; 
 }

 miPrueba();

 echo "<p> Variable x fuera de la función es: $x </p>";



?>


</body>
</html>
