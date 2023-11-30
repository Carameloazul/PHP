<?php

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

$username = $_POST['nombre'];
$email = $_POST['email'];
$edad  = $_POST['edad'];

#echo "El usuario $username con correo $email y edad $edad es cubano";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de mi usuario</title>
</head>
<body>
    <p>Username: <?= $username?></p>
    
</body>
</html>