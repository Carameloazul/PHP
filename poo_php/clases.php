<?php

// require 'Admin.php';
// require 'Person.php';
// require 'User.php';

include 'Admin.php';
include 'Person.php';
include 'User.php';

$pepito = new User;
$pepito->candela = new Admin;

echo $pepito->candela->greet();

