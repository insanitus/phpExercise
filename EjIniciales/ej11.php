<!DOCTYPE html>
<html>
<body>

<?php
function miPrueba(){
    $x = 5;  //Alcance local 
    echo "<p>Variable x dentro de la funcion es: $x</p> ";

}

miPrueba();
//Utilizando x fuera de la funcion generará un error
echo "<p>Variable x fuera de la funcion es: $x </p>";


?>


</body>
</html>
