<?php
    $nombre = "Fernando";
    $Nombre = "Said";
    $edad = 29.5;
    $mayor_edad = true;
    var_dump($nombre);
    var_dump($edad);
    var_dump($mayor_edad);

    define("pi", 3.1416);   //De esta manera podemos declara constantes en PHP

    print("Mi nombre es: " . $nombre);   //La concatenacion se hace con .
    print("La constante PI es: " . pi);
?>