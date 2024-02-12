<?php

//crea un arreglo multidemensional que guarde la información de un listado de amigos y sus teléfonos
$amigos = array(
    array("nombre" => "Juan", "telefono" => "1234567890"),
    array("nombre" => "Maria", "telefono" => "9876543210"),
    array("nombre" => "Pedro", "telefono" => "5678901234")
);

//muestra con count() el número de amigos que tiene tu listado
$numAmigos = count($amigos);
echo "El número de amigos en el listado es: " . $numAmigos;

?>



