<?php

require "../src/helpers.php";

$name = "April";
$age = 22;
$role = "user";

if (validateAgeTest($age)) {
    echo "Hola $name<br>";
    echo getRoleMessage($role);
} else {
    echo "Acceso denegado";
}
