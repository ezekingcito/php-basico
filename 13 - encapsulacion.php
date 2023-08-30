<?php



class Producto {
    public function __construct(protected $nombre = "Oreo", private $precio = 29, protected $caducidad = "29/09/2023"){}

    public static function obtenerProducto() {
        return "Accedimos al metodo estatico";
    }
}

$galletas = new Producto("Principe", 20, "29/09/2023");

echo "<pre>";
print_r($galletas->obtenerProducto("Marias"));
echo "<br>";
print_r($galletas->obtenerProducto("Principe"));
echo "<br>";
print_r(Producto::obtenerProducto());
echo "</pre>";
