<?php include 'includes/header.php';


$nombre = "Ignacio";    // string
var_dump($nombre);
echo "<br>";

$edad = 25;             // int
var_dump($edad);
echo "<br>";

$altura = 1.75;         // float
var_dump($altura);
echo "<br>";

$activo = true;         // boolean
var_dump($activo);
echo "<br>";

$colores = ["rojo","azul","verde"]; // array
var_dump($colores);
echo "<br>";

$persona = (object) ["nombre"=>"Ignacio","edad"=>25]; // object
var_dump($persona);
echo "<br>";

$vacante = null;        // null
var_dump($vacante);
echo "<br>";

include 'includes/footer.php';

?>


