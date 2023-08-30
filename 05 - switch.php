<?php

$opcion = "SASS";

switch ($opcion) {
    case 'HTML':
        print("Lenguaje de maquetado");
        break;
    case 'CSS':
        print("Hojas de estilo");
        break;
    case 'JS':
        print("Lenguaje de programacion cliente");
        break;
    default:
        print("No conozco ese lenguaje");
        break;
}

?>