<?php

$calificaciones = [100, 99, 89, 78, 67, 78];
$arreglo = ["Hola mundo", 24, true];

for($i = 0; $i < count($calificaciones); $i++) {
    print("iteracion: " . $i . " valor: " . $calificaciones[$i]);
    echo "<br>";
}

for($i = 0; $i < count($arreglo); $i++) {
    print("iteracion: " . $i . " valor: " . $arreglo[$i]);
    echo "<br>";
}

?>