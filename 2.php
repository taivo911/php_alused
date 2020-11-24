<?php
//muutujate loomine
$enimi = 'Karin';
$pnimi = "Eegreid";
$nimi = $enimi.' '.$pnimi;
$vanus = 37;
$kaal = 69.5;

echo 'Tere '.$nimi.'<br>';
echo 'Sinu nimi on '.$nimi.'<br>';
echo 'Sa oled '.$vanus.' aastane'.'<br>';
echo 'Sa kaalud '.$kaal.' kilogrammi.'.'<br>';
echo "Sa kaalud $kaal kilogrammi <br> <br>";

//kahekordsed jutumärgid
echo "$nimi on $vanus aastane<br>";

//ühekordsed jutumärgid
echo $nimi.' on '.$vanus.' aastane<br>';

//muutuja käänamine
echo "${enimi}il on kiire auto!<br>";

//jutumärkide kuvamine
echo '"Tere tulemast Eestisse"<br>';
echo "Shakespeare'i teosed<br>";
echo "\"It's My Life\" - Dr. Alban<br><br>";


echo "(\(\\<br>";
echo "(-.-)<br>";
echo "o_('')('')<br><br>";

//aritmeetilised operaatorid
$x = 8;
$y = 2;
$liitm = $x + $y;
$lahut = $x - $y;
$korru = $x * $y;
$jagam = $x / $y;
$jaak = $x % $y;
echo "Vastused: $liitm, $lahut, $korru, $jagam, $jaak <br>";

$a = 10;
$a++; //sama mis $a = $a + 1
echo $a.'<br>';

$nimi = 'Mari ';
$pnimi = 'Kisakõri';
$nimi .= $pnimi;
echo $nimi.'<br>';

//muutuja väärtuste vormindamine
$nimi = 'Mari';
$vanus = 27;
printf('%s on %s aastane. <br><br>', $nimi, $vanus);

//kaks komakohta peale vastust
$i = 7.26;
$j = 2.369;
$k = $i / $j;
echo 'A = 7.26<br>';
echo 'B = 2.369<br>';
printf('A/B = %0.2f', $k);





?>