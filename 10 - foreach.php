<?php

$persona = [
    "nombre" => "Fernando",
    "edad" => 29,
    "direccion" => [
        "ciudad" => "CDMX",
        "alcaldia" => "Milpa Alta",
        "pueblo" => "San Juan"
    ],
    "calificaciones" => [12,23,34,45,67,78]
];

$calificaciones = [100, 99, 89, 78, 67, 78];

/* foreach ($calificaciones as $calificacion) {
    print($calificacion);
    echo "<br>";
}

foreach ($calificaciones as $calificacion):
    print($calificacion);
    echo "<br>";
endforeach; */

foreach ($persona as $llave => $valor) {
    echo "<pre>";
    if (gettype($valor) !== "array") {
        print("llave: " . $llave . " valor: " . $valor);
    } else {
        print($llave . ": ");
        print_r($valor);
    }
    echo "</pre>";
}

?>