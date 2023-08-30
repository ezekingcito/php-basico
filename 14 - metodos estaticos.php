<?php

class Persona {

    public static $edad;
    protected static $nombre;
    protected static $apellido;


    public function __construct($nombre, $apellido, $edad) {
        self::$nombre = $nombre;
        self::$apellido = $apellido;
        self::$edad = $edad;
    }

    public static function obtenerPersona() {
        return "Nombre: " . self::$nombre . " Apellido: " . self::$apellido . " Edad: " . self::$edad;
    }
}

$persona = new Persona("Fernando", "Vasquez", 29);

print_r($persona->obtenerPersona());

print(Persona::obtenerPersona());

?>