<?php

#Haciendo Casting
$numerito = "5";

var_dump($numerito);

#Con el tipo en los parentesis y antesediendo a la variable cambio el tipo
$numerito =  (int)$numerito;

echo "<br>";

var_dump($numerito);

$dias = 5.89;

echo "<br>";

$dia = 5.89;

var_dump($dia);

echo "<br>";

$dia = (int) $dia;

var_dump($dia);

$banderita = false;
$banderita = (int) $banderita;
echo "<br>Convirtiendo de booleano a integer<br>";
var_dump($banderita);

$banderita = 0;
$banderita = (bool) $banderita;
echo "<br>Convirtiendo de integer a booleano<br>";
var_dump($banderita);

#Cualquier otro numero distinto a 0 
$banderita = -1522;
$banderita = (bool) $banderita;
echo "<br>Convirtiendo de integer a booleano<br>";
var_dump($banderita);

echo "<br>Resultados avanzados<br>";

//Avanzado
$numero_preguntas = 5 + "5";
echo "<br> Integer (5 )mas un numero en String (5) da ";
var_dump($numero_preguntas);
echo "<br>";
echo "<br> String (5) mas Integer (5) da ";
$numero_respuestas = "5" + 5;
#echo "<br>";
var_dump($numero_respuestas);
echo "<br>";
echo "<br>Integer dividido entre float da ";
$promedio_maximo = $numero_respuestas / 1.0;

var_dump($promedio_maximo);
echo "<br>";
echo "<br>Integer (3) + String(5 michis) da ";
$michis = 3 + "5 micihis";
var_dump($michis);

echo "<br>";
$string = "Jose ";
var_dump($string);

echo "<br>";
$numerador = 10;
$denomidaor = 5;
$resultado = $numerador / $denomidaor;
var_dump($resultado);