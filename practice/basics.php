<?php

require "../src/helpers.php";
$name = sanitizeName(" Abril ");
$isDev = true;
$age = 18;
$role = "user";

echo $name;
echo $age;
//FUNCION VALIDAR EDAD

if (validateAgeTest($age)) {
    echo "Es mayor de edad";
} else {
    echo "Es menor de edad";
}

echo getRoleMessage($role) . "<br>";

echo "Nombre: $name";



//OPERADORES ARITMETICOS
$a = 8;
$b = 3;

var_dump($a + $b); //SUMA
var_dump($a - $b); //RESTA
var_dump($a * $b); //MULTIPLICACIÓN
var_dump($a / $b); //DIVISIÓN
var_dump($a % $b); //RESIDUO DE DIVIDIR a POR b
var_dump($a ** $b); //POTENCIA

//OPERADORES DE COMPARACIÓN
$c = 4;
$d = "4";
var_dump($c == $d); //IGUAL
var_dump($c === $d); //TIPO
var_dump($c != $d); //DIFERENTE
var_dump($c !== $d); //DIFERENTE Y TIPO
$e = 9;
$f = 4;
$g = false;
var_dump($e < $f); //ES MENOR
var_dump($e > $f); //ES MAYOR
var_dump($e <= $f); //ES MENOR O IGUAL
var_dump($e >= $f); //ES MAYOR O IGUAL

//OPERADORES LOGICOS
var_dump($e > $f & $e === 9); //LAS DOS SON VERDADERAS.
var_dump($e > $f || $e === 6); //VERIFICA QUE UNA SEA VERDADERA
var_dump(!$g);

//CONDICIONALES
//CONDICIONAL SIMPLE(IF)
if (10 >= 9) {
    echo "es correcto";
}
//CONDICIONAL DOBLE
if (4 >= 10) {
    echo "correcto";
} else {
    echo "No es correcto";
}

//CONDICIONAL ELSEIF
$puntos = 55;
if ($puntos > 90) {
    echo "Excelente";
} elseif ($puntos > 50) {
    echo "Aprobado";
} else {
    echo "Suspendio";
}

//SWITCH

$rol = "editor";

switch ($rol) {
    case "admin":
        echo "Tienes control total";
        break;
    case "editor":
        echo "Puedes editar artículos";
        break;
    default:
        echo "Eres un suscriptor";
}
//TERNARIA
$edad = 22;
$mensaje = ($edad >= 18) ? "Mayor de edad" : "Menor de edad";
echo "ya eres : " . $mensaje;

//BUCLES
//FOREACH
$estudiantes = ["Ana", "Luis", "Marta", "Pedro"];

echo "<h3>Lista de Estudiantes:</h3>";
foreach ($estudiantes as $nombre) {
    echo "Nombre: " . $nombre . "<br>";
}

//FOR

echo "<h3>Selecciona tu año de nacimiento:</h3>";
echo "<select>";

// Empezamos en 2024, mientras sea mayor a 1990, y restamos 1 cada vez
for ($anio = 2026; $anio >= 1990; $anio--) {
    echo "<option value='$anio'>Año $anio</option>";
}

echo "</select>";

//WHILE

$bateria = 3;

echo "<h3>Estado de carga:</h3>";
while ($bateria > 0) {
    echo "Dispositivo encendido. Energía restante: $bateria% <br>";
    $bateria--; // Importante: restamos 1 para que el bucle termine algún día
}
echo "Dispositivo apagado.";

//DO-WHILE

$intentos = 0;

echo "<h3>Intento de conexión:</h3>";
do {
    echo "Intentando conectar al servidor... (Intento: $intentos) <br>";
    $intentos++;
} while ($intentos < 0); // Aunque la condición es falsa, se ejecutó una vez arriba
