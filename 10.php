<!DOCTYPE html>
<html lang="et">
<body>

<?php
//tnane kuupev
echo date('d.m.Y G:i' , time());

//vanusekalkulaator

echo '<form action="10.php" method="get">
        <label for="synniaeg">Sisesta synniaeg</label>
        <input type="date" name="synniaeg" id="synniaeg" ><br>
        <input type="submit" value="Kalkuleeri">
    </form>';

$dob = $_GET['synniaeg'] ?? '';

function ageCalculator($dob){
    if(!empty($dob)){
        $birthdate = new DateTime($dob);
        $today   = new DateTime('today');
        $age = $birthdate->diff($today)->y;
        return $age;
    }else{
        return 0;
    }
}

echo ageCalculator($dob);

echo "<br>";

$date = strtotime("May 31, 2021 08:00 AM");
$remaining = $date - time();

$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);
echo "Kooli lõpuni on jäänud $days_remaining päeva ja $hours_remaining tundi...EDU!";

?>

</body>
</html>