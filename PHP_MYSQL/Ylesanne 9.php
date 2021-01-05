<?php

$audi= "Punane Audi".'<br>';
echo $audi;
$audi = new car;

class car {
    var $speed = 0;
    function kiirendus() {
        for ($i = 10; $i <= 100; $i += 10) {
            $speeding = $i;
            echo "Kiirus: $speeding<br>";
        }
    }
}

$audi->kiirendus();
?>
