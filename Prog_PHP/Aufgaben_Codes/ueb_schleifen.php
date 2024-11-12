<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

//ueb_schleifen.php
//Es sollen alle Zahlen von 1 bis 100 addiert werden

$summe = 0;
for($i = 1; $i <= 100; $i ++) {
    $summe = $summe + $i;
}
echo"<p>Summe: $summe";


?>
</body>
</html>