<?php
// Notas:
# Los nombres de las variables son sensibles a mayusculas y minisculas
# Los nombres de variables no pueden llevar espacios, empezar por numeros o llevar caracteres especiales como puntos o incluso la letra ñ

# Tipos de datos:
# String: Cadena de texto
# Integer: Numeros enteros
# Double: Numeros con decimales
# Boolean: Verdadero o Falso (true / false)
# Array: Arreglo
# Object: Objeto
# Class: Clase
# null: Cuando a una variable aun no se le ha asignado ningun valor

# gettype() ves el tipo de variable pasado como parámetro

//declara dos variables de tipo texto con tu nombre y apellidos Concatena y observa el resultado por pantalla.

$nombre = "Rodrigo";
$apellidos = "Sambade Saá";

echo $nombre . $apellidos;



//crea una variable y no la incialices. 
//Utiliza la función gettype() para ver el tipo de datos

$variable;

echo gettype($variable);




?>
