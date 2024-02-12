<?php
# Para depurar y ver el contenido de nuestra variables tenemos la funciones var_dump() y print_r


define('MESES', [
  'Enero',
  'Febrero',
  'Marzo',
  'Abril',
  'Mayo',
  'Junio',
  'Julio',
  'Agosto',
  'Septiembre',
  'Octubre',
  'Noviembre',
  'Diciembre'
]);

// Crea un variable booleana con false y mira el resultado de utilziar ambas funciones para determinar sus diferencias

$boolean = false;

print_r($boolean);
var_dump($boolean);

// Coge el array de meses creado en el ejercicio anterior y mira las diferencias de cómo se muestra con ambas funciones

$meses = [
  'Enero',
  'Febrero',
  'Marzo',
  'Abril',
  'Mayo',
  'Junio',
  'Julio',
  'Agosto',
  'Septiembre',
  'Octubre',
  'Noviembre',
  'Diciembre'
];

print_r($meses); 
echo "<br>";
var_dump($meses);