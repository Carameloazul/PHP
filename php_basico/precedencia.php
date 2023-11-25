<?php

$a = 4;
$b = $a++;
var_dump($b);
echo "<br>";
var_dump($a);
echo "<br>";
$b = ++$a;
var_dump($b);
echo "<br>";
var_dump($a);
echo "<br>";

$michis_4_patas = true;
$michis_program_con_php = false;

$resultado = $michis_4_patas and $michis_program_con_php;

var_dump($resultado);
$resultado = ($michis_4_patas and $michis_program_con_php);
echo "<br>";
var_dump($resultado);