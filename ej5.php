<!DOCTYPE html>
<html>
<body>



<!-- Demostrando que las variables
     son sensibles al cambio de
     mayusculas


 # $color, $COLOR y $coLOR son tratadas
 # como tres variables diferentes
-->


<?php
 $color="rojo";
 echo "My carro es " .$color. "<br>";
 echo "My casa es de color" .$COLOR."<br>";
 echo "My bote es de color" . $coLOR . "<br>";

?>


</body>
</html>
