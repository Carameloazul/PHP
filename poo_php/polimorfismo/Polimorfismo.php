<?php

include "Admin.php";
include "Base.php";
include "Guest.php";
include "User.php";

// require "Admin.php";
// require "Base.php";
// require "Guest.php";
// require "User.php";

$guest = new Guest();
echo $guest->login();

echo "<br>";

$user = new User("VIVI");
echo $user->login();

echo "<br>";

$admin = new Admin("PEPE");
echo $admin->login();

?>