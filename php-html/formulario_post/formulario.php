<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomulario con POST</title>
</head>
<body>
    <form action="./server.php" method = "post">
    <label for="name">Nombre</label>
    <input type="text" name = "nombre" id="nombre">
    <label for="edad">Edad</label>
    <input type="text" name = "edad" id = "edad">
    <button type="submit">Enviar</button>
    </form>
</body>
</html>