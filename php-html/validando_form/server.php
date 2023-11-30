<?php

#var_dump(empty($_POST['name']));

#die();

#isset() puedo saber si se envio determinada informacion
#empty() puedo saber si la informacion esta vacia o llena

// if(isset($_POST['name']) && !empty($_POST['name'])){
//     echo "<h1>Se entro al if. Hola! " . $_POST['name'] . "</h1>";
    
// }else{

//     echo "<h1>No enviastes nada</h1>";
// }
echo "<pre>";
var_dump($_POST);
echo "</pre>";
if(empty($_POST['form'])){
    echo "<pre>";
    var_dump($_POST['form']);
    echo "</pre>";


}else{
    echo "No ha enviado nada";
}

?>