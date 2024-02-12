<?php
//Crea un arreglo asociativo donde se guarde la información de un perro donde constará su nombre, su raza, y su edad

//cambia a posteriori el nombre del perro y muéstralo por pantalla 


$perro = [
    "nombre" => "Fido",
    "raza" => "Labrador",
    "edad" => 3
];


$perro["nombre"] = "Max";
echo "El nombre del perro es: " . $perro["nombre"];

?>


