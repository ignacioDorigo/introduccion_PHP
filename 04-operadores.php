<?php include 'includes/header.php';

$numero1 = 3;
$numero2 = 4;
$numero3 = 5;
$numero4 = 4;

var_dump($numero1 + $numero2);
echo "<br>";
var_dump($numero1 - $numero2);
echo "<br>";
var_dump($numero1 / $numero2);
echo "<br>";
var_dump($numero2 % $numero4);
echo "<br>";
var_dump($numero2 * $numero4);
echo "<br>";

var_dump($numero2 ** $numero4);
echo "<br>";


echo "$numero2 <=> $numero4 ==> ";
var_dump($numero2 <=> $numero4);
echo "<br>";

echo "$numero1 <=> $numero3 ==> ";
var_dump($numero1 <=> $numero3);
echo "<br>";

echo "$numero3 <=> $numero1 ==> ";
var_dump($numero3 <=> $numero1);
echo "<br>";





include 'includes/footer.php';