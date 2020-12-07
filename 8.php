<?php
//Rida 10 arvu ja siis break
for ($arv = 1; $arv<=100; $arv++) {
    if ($arv % 10 == 0) {
        echo $arv.". "."<br>";
    } else {
        echo $arv.". ";
    }
}
?>


<?php
//10 t2rni yhes reas
for($rida=1; $rida<=10; $rida++) {
        echo '*';
}
?>


<?php
//10 t2rni eraldi reas
for($rida=1; $rida<=10; $rida++){
    echo '*<br>';
}
?>



<form action="8.php" method="post">
    <p>Ruudu kylje pikkus</p>
    <input type="text" name="kylg">
    <button type="submit" name="genereeri">Genereeri</button>
</form>

<?php
    if (isset($_POST['genereeri'])) {
        for ($i = 0; $i < $_POST['kylg']; $i++) {
            for ($j = 0; $j < $_POST['kylg']; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    }

?>

<br>

<?php
//kahanev
for ($y=10; $y>=1; $y--) {
    if ($y % 2 == 0) {
        echo $y.$break;
    } else {
        continue;
    }
}

?>

<?php
//kahanev
for ($y=1; $y<=100;$y++) {
if ($y % 3 == 0) {
    echo $y.", ";
} else {
    continue;
}
?>

    <?php
    $poisid = array('Mati', 'Juhan', 'Kalle');
    $tydrukud = array('Maarja', 'Kristi', 'Ave');

    for ($x = 0; $x < count($poisid); $x++) {
        echo $poisid[$x]." ".$tydrukud[$x]."<br>";
    }
    ?>