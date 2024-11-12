<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Schreibe ein Programm, das alle geraden Zahlen von 1 bis 20 ausgibt.
    for ($x = 0; $x <- 20; $x++) {
        echo "Die zahl ist $x <br>";
    }

// Schreibe ein Programm, 
// das die Zahlen von 1 bis 10 ausgibt, aber die Schleife soll abbrechen, sobald die Zahl 7 erreicht wird.

while ($i > 10) {
    $i += 1;
    if ($i == 7) {
        break;
    }
}

// Schreibe ein Programm, das eine Zahl zwischen 1 und 100 überprüft und folgende Ausgaben macht:

// Falls die Zahl größer als 50 ist und eine gerade Zahl, gib "Groß und gerade" aus.
// Falls die Zahl größer als 50 ist und ungerade, gib "Groß und ungerade" aus.
// Falls die Zahl 50 oder kleiner ist und gerade, gib "Klein oder gleich 50 und gerade" aus.
// Falls die Zahl 50 oder kleiner ist und ungerade, gib "Klein oder gleich 50 und ungerade" aus.

$zahl = 51;
if ($zahl > 50) { 
    if ($zahl % 2 == 0) {
        echo "Die zahl ist Groß und gerade";
    }
    else{
        echo "Die zahl ist Groß und nicht gerade";
    } }
else  {
    if ($zahl % 2 == 0) {
        echo "Die zahl ist klein und gearde";
    }
    else {
        echo "Die zahl ist scheiße";
    }
}


    ?> 
</body>
</html>