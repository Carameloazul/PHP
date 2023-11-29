<?php 
$usuarios = array(
    array(
        "id"=>0,
        "username"=>"Retax"
    ),
    array(
        "id"=>1,
        "username"=>"Pancho"
    ),
    array(
        "id"=>2,
        "username"=>"Mr.Michi"
    ),
);
echo var_dump(json_encode($usuarios));
$dinero = 12;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De PHP a JS</title>
</head>
<body>
    
<script>
    
    let users = JSON.parse('<?= json_encode($usuarios)?>');
    //console.log(users);
    let dinero =<?=$dinero  ?>; 
    //console.log(dinero);

</script>

<script src= "./javascript.js"></script>>
</body>
</html>