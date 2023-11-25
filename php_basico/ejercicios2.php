<?php

$name = "Jose";
$apellido = "Machado Salgado";

echo "Mi nombre es $name" . " y mi apellido es " . $apellido;

$personas = [
    "Carlos" => 22,
    "Mr.Michi" => 15,
    "Juan" => 65    
];
//<br>(break) de html me hace un salto de linea en el navegador, como si usara \n
echo "<br>";

//var_dump me permite inspeccionar las variables
var_dump($personas);
echo "<br>";
//print_r me permite ver la informacion igual en las variables pero mas limpio
print_r($personas)

// Eso es un comentario
# Esto es otro comentario
/*
    Cualquier cosa
    abajo puedo 
    seguir escribiendo 
    mas cosas
*/

?>