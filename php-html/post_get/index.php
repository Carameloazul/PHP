<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No se debe hacer</title>
</head>
<body>
    <script>
        const formData = new FormData();

        formData.append('nombre', 'Mr.Michi');
        formData.append('edad', '14');

        fetch(
            "server.php?color=naranja",
            {
                body:formData,
                method:"POST"
            }
        ).then(res => res.text())
         .then(data=>{
            console.log(data);
         });
    </script>
</body>
</html>