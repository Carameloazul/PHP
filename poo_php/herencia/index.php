<?php

//Escribiendo palabra "final" en una clase no permite que se herede de ella
class User
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    // Con la palabra clave "final" no permite que se pueda sobreescribir el metodo
    public function getName()
    {
        return $this->name;
    }

}

class Admin extends User
{
    // Aca da un error por no puede escribir un metodo con la palabra clave "final"
    public function getName()
    {
        return "Soy $this->name";
    }
}

$admin = new Admin('Italo');
echo $admin->getName(); 

echo "<br>";

$user = new User('Italo');
echo $user->getName(); 