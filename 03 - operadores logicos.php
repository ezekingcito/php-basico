<?php

// Tabla de verdad de AND
var_dump(false and false);
echo "<br>";
var_dump(true and false);
echo "<br>";
var_dump(false && true);
echo "<br>";
var_dump(true && true);
echo "<br>";

//Tabla de verdad de OR
var_dump(false or false);
echo "<br>";
var_dump(true or false);
echo "<br>";
var_dump(false | true);
echo "<br>";
var_dump(true | true);
echo "<br>";

//Tabla de verdad de NOT
var_dump(!true);
echo "<br>";
var_dump(!false);


?>