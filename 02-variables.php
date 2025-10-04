<?php include 'includes/header.php';


$nombre = "Ignacio";
$apellido = "Dorigo";
$edad = 25;

include 'includes/footer.php'; ?>

<div>
    <h1>Hola <?php
                echo $nombre . " " . $apellido ?></h1>
    <h2>Asi que tenes
        <?php
        echo $edad . " años" ?></h2>
</div>