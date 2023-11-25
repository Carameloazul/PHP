<?php

$a = 5;
$b = 5;
$c = 9;
$d = 2;

echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>";
echo $d;
echo "<br>";

// == Igual
// Dos signos de igualdad compara valor pero no tipo
var_dump($a == $b);
echo "<br>";
//Identico

// Tres signo de igualdad compara valor y tipo
var_dump($a === $b);
echo "<br>";
// !=Diferente
// Compara valor pero no tipo
var_dump($a!=$b);
echo "<br>";

// Compara valor y tipo
var_dump($a !== $b);


// < Menor que:

var_dump($a < $b);
echo "<br>";
var_dump($c < $b);
echo "<br>";
var_dump($d < $b);

// > Mayor que:
var_dump($a > $b);
echo "<br>";
var_dump($c > $b);
echo "<br>";
var_dump($d > $b);

// >= Mayor o igual que:
echo "<br>";
var_dump($a >= $b);
echo "<br>";
var_dump($a >= $b);
echo "<br>";
var_dump($a >= $b);

// <= Mayor o igual que:
echo "<br>";
var_dump($a <= $b);
echo "<br>";
var_dump($a <= $b);
echo "<br>";
var_dump($a <= $b);

// <=> Operador Navel Espacial
// Devuelve 1 si el numero del lado izquierdo es mayor que el del lado derecho
echo "<br>";
var_dump(2<=>1);
echo "<br>";
// Devuelve 0 si los numeros son iguales
var_dump(1<=>1);
// Devuelve -1 si el numero de la derecha es mayor que el de la izquierda

// ?? Fusion de Null

$edad_de_pepito = 23;

echo $edad_de_juanito ?? $edad_de_pepito;
echo "<br>";
echo $edad_de_juanito ?? $edad_de_jaimito ?? $edad_de_pepito;


