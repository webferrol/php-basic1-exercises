<?php

// Crea dos variables, réstalas y muestra el resultado
$variable1 = 10;
$variable2 = 5;
$resultado = $variable1 - $variable2;
echo "El resultado de la resta es: " . $resultado . "\n";

// Muestra los números del 1 al 10 en línea
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo "\n";

// Calcula el área del círculo de radio dado
$radio = 5;
$area = pi() * pow($radio, 2);
echo "El área del círculo de radio " . $radio . " es: " . $area . "\n";

// Crea un arreglo con los colores primarios RGB y mostrar por pantalla el color azul
$colores = ["rojo", "verde", "azul"];
echo "El color azul es: " . $colores[2] . "\n";

// Crea un array asociativo con las capitales de algunos países
$paises = [
    "España" => "Madrid",
    "Francia" => "París",
    "Inglaterra" => "Londres",
    "Italia" => "Roma",
    "Portugal" => "Lisboa",
    "Alemania" => "Berlín"
];

// Muestra por pantalla la capital de Francia
echo "La capital de Francia es: " . $paises["Francia"] . "\n";

?>

