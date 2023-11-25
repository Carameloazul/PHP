<?php

$numero_1 = 8;
$numero_2 = 7;

echo $numero_1 + $numero_2;

#Para declarar variables constantes usamos la funcion "define"

define("NUMERO_PI", 3.14);

//Si intento redefinir una constante me va a lanzar una alerta
define("NUMERO_PI", 14);

#NUMERO_PI = 4;

echo NUMERO_PI; 