<!DOCTYPE html>
<html>
<body>

<?php
function miPrueba(){
   static $x=0;
   //cold.mp3
   echo $x;
   $x++;

}

miPrueba();
echo "<br>";
miPrueba();
echo "<br>";
miPrueba();


?>


</body>
</html>
