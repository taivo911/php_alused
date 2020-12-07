<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://taivonurk.ikt.khk.ee/js/java/bootstrap.min.css">
    <meta name="Veebiarendus" content="Õpime veebiarenduse aluseid 2020" />
    <meta name="Veebispetsialist" content="HTML,CSS,HTML5,CSS3, BOOTSTRAP4"/>
    <meta name="Taivo N." content="Taivo Nurk" />
</head>
<body>
<div class="container mt-5">
    <?php
    $br = "<br>";

    // tervitus
    function tervitus(){
        echo "Tere päiksekesekene!";
    }
    echo tervitus().$br.$br;

    // uudiskiri

    function uudiskiri() {
        echo '<form action="9.php" method="get">
        <label for="kiri">Liitu uudiskirjaga </label>
        <input type="text" name="kiri" id="kiri" ><br>
        <input type="submit" value="Liitu">
    </form>';
    }

    echo uudiskiri().$br;


    // kasutajanimi
    function kasutaja($nimi) {
        $br = "<br>";
        echo strtolower($nimi).$br;
        echo strtolower($nimi)."@hkhk.edu.ee".$br;
        echo "Kood: ".rand(100000,999999).$br;
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'.$br;
        echo 'Kood2: '.substr(str_shuffle($permitted_chars), 6, 7).$br;
    }
    error_reporting( 0);

    echo kasutaja(TaiVOS);

    // arvud

    echo '<form action="9.php" method="get">
        <label for="esimene">Vali esimene number:</label>
        <input type="number" name="esimene" id="esimene" ><br>
        <label for="teine">Vali teine number:</label>
        <input type="number" name="teine" id="teine" ><br>
        
        <label for="kolmas">Samm:</label>
        <input type="number" name="kolmas" id="kolmas" ><br>
        <input type="submit" value="Jada">
    </form>';

    $esimene = $_GET['esimene']??'';
    $teine = $_GET['teine']??'';
    $kolmas = $_GET['kolmas']??'';

    function jada($esimene,$teine,$kolmas) {
        if($kolmas >0) {
            for($y=$esimene;$y<=$teine;$y += $kolmas) {
                echo $y."<br>";
            }}

    }
    echo jada($esimene,$teine,$kolmas);

    // pindala

    echo '<form action="9.php" method="get">
        <label for="alus">Ristküliku alus </label>
        <input type="number" name="alus" id="alus" ><br>
        <label for="korgus">Kõrgus </label>
        <input type="number" name="korgus" id="korgus" ><br>
        
        <input type="submit" value="Arvuta pindala">
    </form>';

    $alus = $_GET['alus']??'';
    $korgus = $_GET['korgus']??'';

    function pindala($alus, $korgus) {
        echo "Pindala on ".$alus*$korgus."<br>";
    }

    echo pindala($alus,$korgus);

    // isikukood

    echo '<form action="9.php" method="get">
        <label for="kood">Isikukood </label>
        <input type="number" name="kood" id="kood" ><br>
        
        <input type="submit" value="Submit">
    </form>';

    $kood = $_GET['kood']??'';

    function kood($kood) {
        if (isset($_GET['kood'])) {
            if(strlen($_GET['kood'])) {
                if(strlen($kood) == 11) {
                    echo "Isikukood on õige pikkusega. "."<br>";
                    if (substr($kood,0,1) == 3 || substr($kood,0,1) == 5) {
                        echo "Sa oled mees"."<br>";
                    } else {
                        echo "Sa oled naine"."<br>";
                    }
                    echo "Sinu sünniaeg on: ".substr($kood, 5, 2).".".substr($kood, 3, 2).".".substr($kood, 1, 2)."<br>";


                } else {
                    echo "Isikukood on vale pikkusega"."<br>";
                }
            }}}

    echo kood($kood);

    // hea m6te

    function lause() {
        $alus = array("Mulle", "Sulle", "Talle");
        $oeldis = array("meeldib", "ei meeldi", "vahest meeldib");
        $sihitis = array("vihm.", "rahe.", "p2ike.");

        $rand1 = rand(0,2);
        $rand2 = rand(0,2);
        $rand3 = rand(0,2);
        echo $alus[$rand1]." ".$oeldis[$rand2]." ".$sihitis[$rand3]."<br>";

    }
    echo lause();


    ?>

</div>


<script src="https://taivonurk.ikt.khk.ee/js/jquery-3.3.1.min.js"></script>
<script src="https://taivonurk.ikt.khk.ee/js/popper.min.js"></script>
<script src="https://taivonurk.ikt.khk.ee/js/bootstrap.min.js"></script>
</body>
</html>