<?php
$se_hablo_de_bruno = false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <!-- Esto no se debe hacer -->
    <?php if($se_hablo_de_bruno){
        echo "<p>Esta condicion es verdadera</p>";
        
    }
    else{
        echo "<b>Esta condicion es falsa</b><br>";
    }
    ?>

    <!-- Esto es aceptable -->
    <h1> Esto es aceptable </h1>
    <?php if ($se_hablo_de_bruno){ ?>
        <b>Es verdadero</b>
    <?php }else {?>
        <b>Es Falso</b>
    <?php }?>    


    <!--Esto si deberias hacerlo -->
    <h1> Esto si deberias hacerlo </h1>
    <?php if($se_hablo_de_bruno):?>
        <p>La condicion es true</p>

    <?php else:?>
        <h2>La condicion es falsa</h2>
    <?php endif;?>    
</body>
</html>