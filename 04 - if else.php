<?php

$edad = 60;

if ($edad >= 18 and $edad < 30) {
    print("Eres mayor de edad");
} else if ($edad >= 30 and $edad < 60) {
    print("Eres un adulto joven");
} else if ($edad >= 60) {
    print("Eres un adulto mayor");
} else {
    print("Eres menor de edad");
}

?>