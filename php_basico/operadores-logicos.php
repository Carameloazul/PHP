<?php

$michis_felinos = true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan_con_php = false;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;
$es_un_michi_grande = true;


// And
var_dump($michis_felinos && $michis_4_patas);
echo "<br>";

var_dump($michis_felinos && $michis_vuelan);
echo "<br>";

var_dump($michis_felinos && $michis_programan_con_php);
echo "<br>";

// Or

var_dump($michis_felinos || $michis_4_patas);
echo "<br>";

var_dump($michis_felinos || $michis_vuelan);
echo "<br>";

var_dump($michis_felinos || $michis_programan_con_php);
echo "<br>";

var_dump($michis_vuelan || $michis_programan_con_php);

// Not
echo "<br>";
var_dump(!$michis_felinos);
echo "<br>";

var_dump(!$michis_4_patas);
echo "<br>";

var_dump(!$michis_programan_con_php);
echo "<br>";

var_dump(!$michis_vuelan);
echo "<br>";

//Experimentos que te va a a hacer decir waaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaat

$resultado = $michis_4_patas and $michis_programan_con_php;
var_dump($resultado);

//Cual es el resultado
echo "<br>";
echo "es_un_michi_grande && le_gusta_comer ";
$resultado = $es_un_michi_grande && $le_gusta_comer;
var_dump($resultado);
echo "<br>";
echo "es_un_michi_grande || sabe_volar ";
$resultado = $es_un_michi_grande || $sabe_volar;
var_dump($resultado);
echo "<br>";
echo "sabe_volar || tiene_2_patas ";
$resultado = $sabe_volar || $tiene_2_patas;
var_dump($sabe_volar || $tiene_2_patas);

echo "<br>";
echo "!le_gusta_comer ";
var_dump(!$le_gusta_comer);
echo "<br>";
echo "!le_gusta_comer || es_un_michi_grande ";
$resultado = !$le_gusta_comer || $es_un_michi_grande;
var_dump($resultado);
?>