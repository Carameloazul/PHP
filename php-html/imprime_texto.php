<?php

$nombre = "Mr.Michi";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime Texto y etiquetas con PHP</title>
</head>
<body>
    
    <?php echo "<b>Hola mama, estoy aprendiendo a integrar PHP con HTML";?>

    <?= "<br><i> Esta es otra forma de imprimir texto</i>"?>

    <h1>!Hola <?= $nombre?></h1>
</body>
</html>