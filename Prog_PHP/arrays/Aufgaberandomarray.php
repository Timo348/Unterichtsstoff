<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* Array Erstellen 20 Zufälligen Zahlen mit rand(), Zahlen sollen zwichen 1 und 100 sein
    Berechne die Summe, durschnitt, Median(der mittlere wert des Arrays), Quadratischer Mittelwert,
    Quadratischer Mittelwert), Anzahl der Geraden und ungeraden */

    // Übung Array PHP
   $zz_array = []; // Leeres Array dekalrieren
    for($i = 1; $i <= 20; $i++) {
        $zz = rand(1, 100);
        $zz_array[] = $zz;
    }
    echo "<pre>";
    print_r($zz_array);
    echo "</pre>";

    ?>
</body>
</html>