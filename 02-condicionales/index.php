<?php

/* Ejercicio 1 */

$articulos = 20;

if ($articulos <= 12) {
    echo "Caja Rapida";
} else {
    echo "Caja normal";
}

echo "<br/>";

$edad = 20;

if ($edad < 18) {
    echo "No puedes votar";
} else {
    echo "Puedes votar";
}

echo "<br/> <br/>";

/* Ejercicio 2 */

$Nombre = "Mario";
$Edad = 19;

if ($edad < 18) {
    echo "No puedes entrar a la discoteca";
} else {
    echo "puedes entrar";
}

echo "<br/>";

if ($Nombre == "Carlos" xor $Nombre == "Mario") {
    echo "Puedes entrar al vip";
} else {
    echo "No puedes entrar al vip";
}

echo "<br/> <br/>";

/* Ejercicio 3 */

$edad = 17;
$velocidad = 30;
$estatura = 180;

if ($estatura >170 && $velocidad > 27) {
    echo "puedes ingresar al equipo";
} else {
    echo "No puedes ingresar al equipo";
} 

echo "<br/>";

if ($velocidad >27 && $edad > 18 && $estatura >170){
    echo "Entras en ligas mayores";
} else {
    echo "Vas a ligas menores";
}

echo "<br>";

//ejercicio 4

$aire= "amarillo";


switch($aire){
    case "verde":
        echo "calidad del aire es buena";
        break;
    case "amarillo":
        echo "calidad del aire es moderada";
        break;
    case "naranja":
        echo "calidad del aire no es saludable para grupos sensibles";
    break;
    case "rojo":
        echo "calidad del aire no es saludable";
        break;
    case "púrpura":
        echo "calidad del aire es muy poco saludable";
        break;
    case "marrón":
        echo "calidad del aire es peligrosa";
        break;
    default:
        echo "el color no es válido";
    break;
}

?>