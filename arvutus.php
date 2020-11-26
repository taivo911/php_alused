<h1>Vastused</h1>

<?php
//lisab vormist saadud andmed muutujasse
$a = $_GET['t1'];
$b = $_GET['t2'];
$h = $_GET['t3'];

//trapetsi pindala arvutamine
$pindala = (($a + $b)/2) * $h;

printf('Trapetsi pindala on: %0.2f cm2', $pindala);

?>