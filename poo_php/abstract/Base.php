<?php

abstract class Base // Una clase abstracta puede tener metodo abstracto
{

    public function get()
    {
        //... cualquier codigo aqui
    }

    abstract public function store();// un metodo abstracto no se define, solo se declara
}