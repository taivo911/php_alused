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




?>