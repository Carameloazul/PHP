<?php

//Operador de asignacion

$edad_de_jaimito =  ($edad_de_pepito = 18) + 5;

echo "La edad de jaimito es $edad_de_jaimito<br>";
echo "La edad de pepito es $edad_de_pepito";

//var_dump($edad_de_jaimito);


// operadores de Incremento

$contador = 1;

$contador = $contador + 1;
$contador += 1;
$contador++;
echo $contador;

/*

+=
-=
*=
/=

*/
echo "<br>";
$nombre = "Carlos";
$nombre = $nombre . " " . "Santana";
echo $nombre;
echo "<br>";
$nombre1 = "Carlos";
$nombre1 .=  " " . "Santana";
echo $nombre1;


$num = 12;
$resultado =$num++;
echo "<br>$resultado";