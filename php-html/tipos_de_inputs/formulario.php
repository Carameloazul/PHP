<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Input</title>
</head>
<body>
    <form action="./server.php" method="post" enctype = "multipart/form-data">
        <!--Input simple-->
        <!-- <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id= "nombre">
        <button type="submit">Enviar</button> -->

        <!--Arreglos-->
        <!-- <label for="">Personas</label>
        <input type="text" name="personas[]">
        <input type="text" name="personas[]"> 
        <input type="text" name="personas[]"> -->

        <!--Arreglos Asociativos-->
        <!-- <label for="">Persona</label>
        <input type="text" name="persona[nombre]">
        <label for="">Email</label>
        <input type="email" name="persona[email]"> 
        <label for="">Edad:</label>
        <input type="number" name="persona[edad]"> -->

        <!-- Checkbox -->
<!--         
        <input type="checkbox" name = "list1" value = "Checkbox 1">
        <input type="checkbox" name = "list2" value = "Este valor fue clicado">
        <input type="checkbox" name = "list3" value = "Checkbox 3"> -->

        <!-- Radios -->
        <!-- <label for="mexico">Mexico</label>
        <input type="radio" name="pais" value = "Mexico" id="mexico">
        <label for="colombia">Colombia</label>
        <input type="radio" name="pais" value = "Colombia" id="colombia">
        <label for="cuba">Cuba</label>
        <input type="radio" name="pais" value ="Cuba" id="cuba">
         -->
        
        <label for="galeria">Carga tus imagenes:</label>
        <input type="file" multiple name="galeria[]" id = "galeria">
        <button type="submit">Mandar un formulario </button>
    </form>
    
</body>
</html>