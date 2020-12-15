<!doctype html>
<body>
<form action="ylesanne11_1.php" method="get">
    <label for="start">Start.  </label>
    <input type="text" name="start" id="start" ><br>

    <label for="lopp">Lõpp </label>
    <input type="text" name="lopp" id="lopp" ><br>
    <input type="submit" value="Arvuta">
</form>

<?php
$start = $_GET['start'] ??'';
$fin = $_GET['lopp']??'';
if (isset($_GET['start']) or isset($_GET['lopp'])) {
    if(strlen($_GET['start']) and strlen($_GET['lopp'])) {
        if(strlen($_GET['start'])<5 and strlen($_GET['lopp'])<5) {
            echo "Sisesta vähemalt 5 sümboli pikkune aeg.";
        } else {
            echo gmdate("H:i", strtotime($fin) - strtotime($start));
        }

    } else{
        echo "Ajad sisestamata!";
    }
}
echo '<br>';
echo '<br>';
echo '<br>';


$mehi="";
$Meestepalk=0;
$Meestepalksuurim=0;
$naisi="";
$Naistepalk=0;
$Naistepalksuurim=0;
$file = file('tootajad.csv');
$break = '<br>';

for($i = 1; $i < count($file); $i++) {
    if (array_values(array_unique(explode(';', $file[$i])))[1] == "m"){
        $mehi ++;
        $Meestepalk += intval(array_values(array_unique(explode(';', $file[$i])))[2]);
        if(array_values(array_unique(explode(';', $file[$i])))[2] > $Meestepalksuurim) {
            $Meestepalksuurim = array_values(array_unique(explode(';', $file[$i])))[2];
        }
    } else {
        $naisi ++;
        $Naistepalk += intval(array_values(array_unique(explode(';', $file[$i])))[2]);
        if(array_values(array_unique(explode(';', $file[$i])))[2] > $Naistepalksuurim) {
            $Naistepalksuurim = array_values(array_unique(explode(';', $file[$i])))[2];
        }
    }
}
echo "Mehi on: ".$mehi.$break."Naisi on: ".$naisi.$break;
echo "Meeste palk kokku on: ".$Meestepalk.$break."Naiste palk kokku on: ".$Naistepalk.$break;
echo "Meeste suurim palk on: ".$Meestepalksuurim.$break."Naiste suurim palk on: ".$Naistepalksuurim.$break;
echo "Meeste keskmine on: ".$Meestepalk/$mehi.$break."Naiste keskmine on: ".$Naistepalk/$naisi.$break;



?>