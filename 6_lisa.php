<h1>Vastused</h1>

<?php
//ülesanne 4, Taivo Nurk 01.12.



//lisab vormist saadud andmed muutujasse
$a = $_GET['j1'] ?? '';
$b = $_GET['j2'] ?? '';
$c = $_GET['j3'] ?? '';
$d = $_GET['j4'] ?? '';
$e = $_GET['j5'] ?? '';
$f = $_GET['j6'] ?? '';
$g = $_GET['j7'] ?? '';
$h = $_GET['j8'] ?? '';

//jagatis arvutamine
if($b==0){
    echo 'Nulliga ei saa jagada <br>';
} else {
    $jagatis = $a / $b ;
    echo 'Vastus on  <br>'.$jagatis;
}
//vanuse v6rdlus
if( $c > $d){
    echo 'Esimene on vanem <br>';
} else if($d > $c) {
    echo 'Teine on vanem <br>';
} else if($d == 0) {
    echo 'VANUSED SISESTAMATA! <br>';
} else if($d == $c) {
    echo 'Mõlemad on ühevanused <br>';
} else {
    echo 'ERROR <br>';
}

//ristkülik või ruut võrdlus
if( $e == $f){
    echo 'Tegemist on RUUDUGA <br>';
} else {
    echo 'RISTKÜLIK <br>';
}


//ristkülik või ruut joonis
if( $g == $h){
    echo 'Ruut <img height="35" width="35" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Square_-_black_simple.svg/1024px-Square_-_black_simple.svg.png">';
} else {
    echo 'Ristkülik <img height="35" width="auto" src="https://i0.wp.com/mathblog.wpengine.com/wp-content/uploads/2017/03/image005.gif?zoom=2.625&resize=364%2C222&ssl=1"><br>';
}

?>