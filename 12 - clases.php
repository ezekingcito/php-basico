<?php



class Persona {
    public function __construct(public $nombre, public $apellido, public $edad) {}
}

class Alumno {
    public $matricula;
    public $nombre;
    public $apellido;
    public $edad;

    public function __construct($matricula, $nombre, $apellido, $edad) {
        $this->matricula = $matricula;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function reprobar($materia) {
        return "Reprobaste: " . $materia;
    }

    public function aprobar($materia, $calificacion) {
        return "Aprobaste: " . $materia . " con: " . $calificacion;
    }
}


$nombre = new Persona("Fernando", "Vasquez", 29);
$alumno = new Alumno(181190071 ,"Fernando", "Vasquez", 29);

echo "<pre>";
print_r($nombre);
print_r($alumno);
print($alumno->aprobar("POO", 70));
echo "<br>";
print($alumno->reprobar("Suits"));
echo "</pre>";

?>