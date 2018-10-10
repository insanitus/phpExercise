<!DOCTYPE html>
<html>
<body>


<?php

class Car{
    function Car(){
        $this->model = "VW";     

    }

}

#Creando un objeto
$herbie = new Car();

//Mostrando las propiedades del Objeto

echo $herbie->model;
?>


</body>
</html>
