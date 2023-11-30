<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validando enviado de formulario</title>
</head>
<body>
    <form action="./server.php" method = 'POST'>

    <label for="nombre">Nombre:</label>
    <input name = 'nombre' type="text" id = 'nombre'>
    
    <label for="email">Email:</label>
    <input type="text" name = 'email' id = 'email'>
    
    <label for="edad">Edad:</label>
    <input type="text" name = 'edad' id = 'edad'>
    <button type = 'submit'>Enviar</button>

    </form>


</body>
</html>