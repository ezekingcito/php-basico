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

echo "<pre>";
print_r($persona);
print($persona["nombre"]);
print($persona["direccion"]["alcaldia"]);
print($persona["calificaciones"][3]);
echo "</pre>";

?>