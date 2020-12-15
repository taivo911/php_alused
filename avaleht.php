<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Veebiarendus" content="Õpime veebiarenduse aluseid 2020" />
    <meta name="Taivo N." content="Taivo Nurk" />
    <title>Taivo Nurk</title>
</head>
<body>
<menu>
    <a href="avaleht.php" >Avalent</a> |
    <a href="avaleht.php?leht=portfoolio">Portfoolio</a> |
    <a href="avaleht.php?leht=kaart">Kaart</a> |
    <a href="avaleht.php?leht=kontakt">Kontakt</a>
</menu>



<?php

if (!empty ($_GET["leht"])){
    include ($_GET["leht"].'.php');
}

?>
<h2>Avaleht</h2>
<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia feugiat mi,
    ac blandit purus hendrerit vel. Praesent at gravida libero. Nulla mollis, mauris sit amet
    ullancorper tincidunt, nisi nulla rhoncus nulla, sed vestibulum augue risus a sem. Nam
    aliquet lacus id justo viverra eget tincidunt augue pharetra. Aliquam erat volutpat.
    Phasellus id tortor purus, ut bibendum orci. Sed rhoncus tempus viverra. Ut sagittis augue
    eu nunc sollicitudin feugiat. </p>


</body>
</html>