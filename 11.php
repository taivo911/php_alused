<?php
//thtede vormindamine, suure algustahega

echo '<form action="11.php" method="get">
        <label for="name">Sisesta oma nimi</label>
        <input type="text" name="name" id="name" ><br>
        <input type="submit" value="Sisesta">
    </form>';

$nimi = $_GET['name'] ?? '';
if (isset($_GET['name'])) {
    if(strlen($_GET['name'])) {
        echo "Tere ".ucfirst(strtolower($nimi));
    }}
echo "<br>";
// suurthtedeks ja iga the jrel punkt
echo '<form action="11.php" method="get">
        <label for="sona">Sisesta oma nimi</label>
        <input type="text" name="sona" id="sona" ><br>
        <input type="submit" value="Sisesta">
    </form>';

$uusSona = $_GET['sona'] ?? '';
if (isset($_GET['sona'])) {
    if(strlen($_GET['sona'])) {
        for($nr=0;$nr<strlen($uusSona);$nr++){
            echo strtoupper($uusSona[$nr]).'.';
        }
    }}
echo "<br>";

//s6imus6nade filter
echo '<form action="11.php" method="get">
        <label for="soimu">Sisesta lause mis sisaldab s6na noob</label>
        <input type="text" name="soimu" id="soimu" ><br>
        <input type="submit" value="Sisesta">
    </form>';


$tekst = $_GET['soimu'] ?? '';
if (isset($_GET['soimu'])) {
    if(strlen($_GET['soimu'])) {
        $asendus = '****';
        $otsitav = 'noob';
        $nihe = 0;
        $asenduse_algus = strpos($tekst, $otsitav, $nihe);
        $asenduse_markide_arv = strlen($otsitav);
        echo substr_replace($tekst, $asendus, $asenduse_algus, $asenduse_markide_arv);
}}
