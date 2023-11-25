<?php

$numerito = 0;

var_dump($numerito);

$numerito2 = "23";

echo "<br>";

var_dump($numerito2);

$numerito = $numerito2 + 2;

echo "<br>";
var_dump($numerito);
var_dump($numerito2);

echo "<br>";

$numero_integer = 5;
$numero_float = 6.7;
$resultado = $numero_float + $numero_integer;

$numero_integer = 5;
$numero_float = 0.7;
$resultado = $numero_float + $numero_integer;

var_dump($resultado);

#PHP toma el numero del string y lo suma con el entero
$papa = "10 papas en el costal";
$cuantas_papa_hay = $papa + 5;

echo "<br>";

echo "Estas son las papa que hay " . $cuantas_papa_hay;

?>