
<?php 
    $usuarios = ["Mr.Michi","RataxMaster", "JuanDamian"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos</title>
</head>
<body>
    <ul>
        <?php for ($x=0; $x<10;$x++):?>
            <li><?= $x?></li>
        <?php  endfor; ?>
    </ul>

    <ul>
        <?php while(false):?>
            <li>Imprimiendo dentro de while</li>
        <?php endwhile;?>
        
    </ul>

    <h1>Lista de usuarios </h1>
    <ol>
        <?php foreach($usuarios as $username):?>
            <li><?= $username ?></li>
        <?php endforeach;?>    
    </ol>
</body>
</html>