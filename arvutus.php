<h1>Vastused</h1>

<?php
//ülesanne 3, Taivo Nurk 26.11/01.12.

/* Küsi kasutajalt vajalikud parameetrid ning leia:
trapetsi pindala
rombi ümbermõõt
Väljasta andmed täislausega ja ümarda 1 komakoht
Väljakontroll HTML vormile*/


//lisab vormist saadud andmed muutujasse
$a = $_GET['t1'];
$b = $_GET['t2'];
$h = $_GET['t3'];
$c = $_GET['t4'];

//trapetsi pindala arvutamine
$pindala = (($a + $b)/2) * $h;
//rombi ümbermõõdu arvutamine
$umbermoot = $c * 4;

printf('Trapetsi pindala on %0.2f <br>', $pindala);
echo 'Rombi pindala on '.$umbermoot;


?>