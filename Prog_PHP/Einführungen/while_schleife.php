<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$i = 1; // Startwert
while($i <= 10) { // Schleifekopf mit Wiederholbedingung (mit Endwert)
    echo"$i<br>";
    $i++; // Schrittweite
}

$i = 10; 
while($i >= 1) { 
    echo"$i<br>";
    $i--;
}


$i = -100; 
while($i >= 100) { 
    echo"$i<br>";
    $i+=20;
}


?>
</body>
</html>