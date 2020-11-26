<?php
//ülesanne 2, Taivo Nurk 26.11

/* Loo kaks täisarvulist muutujat, mis omavahel liidetakse, lahutatakse, korrutatakse,
jagatakse ja leitakse jääk. Kusjuures vastuse kuvamisel näidatakse ka tehet ja kuvatakse eraldi ridadel.
*/

//jagamine
$a = 10;
$b = 2;
$c = $a / $b;
echo 'A = 10<br>';
echo 'B = 2<br>';
printf('A/B = %0.2f <br><br>', $c);

//korrutamine
$d = 10;
$e = 2;
$f = $d * $e;
echo 'A = 10<br>';
echo 'B = 2<br>';
printf('A*B = %0.2f <br><br>', $f);

//lahutamine
$g = 10;
$h = 2;
$i = $d - $e;
echo 'A = 10<br>';
echo 'B = 2<br>';
printf('A-B = %0.2f <br><br>', $i);

//liitmine
$j = 10;
$k = 2;
$l = $d + $e;
echo 'A = 10<br>';
echo 'B = 2<br>';
printf('A+B = %0.2f <br><br>', $l);

//jäägi leidmine
$m = 10;
$n = 2;
$o = $d % $e;
echo 'A = 10<br>';
echo 'B = 2<br>';
printf('A jääk B = %0.2f <br><br>', $o);

//konverter
$mm = 1500;
echo sprintf('sentimeeter: %0.2f <br> meeter: %0.2f', ($mm / 10), ($mm / 1000));

