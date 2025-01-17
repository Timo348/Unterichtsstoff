<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays in PHP</h1>
    <h2>Numerische Arrays</h2>
<?php
//Datei: num_arrays.php

/* Nicht Praktikabel:
$note_1 = 2.3;
$note_2 = 4.3;
*/

// Array explizit füllen
$notenliste[0]= 2.3;
$notenliste[1]= 4.3;
$notenliste[2]= 5.2;
$notenliste[3]= 2.2;
$notenliste[4]= 1.3;

$notenliste = [2.3, 4.3, 5.2, 2.2, 1.3];
$array = [1, 2, 3];

// Array Ausgeben:
//echo"Noten: $notenliste"; // Funktioniert so nicht
//echo"<br>";

// Einzelne Stellen eines Arrays ausgeben:
echo "Note: $notenliste[3]"; // Gibt Array stelle [3] aus

// Array zum debuggen mit print_r ausgeben:
echo "<pre>";
print_r($notenliste);
echo "</pre>";

// Neuen wert hinzfügen ans Ende
$notenliste[] = 5.8;

// Wert ersetzen
$notenliste[2] = 3.0;

// Bestehenden Wert Löschen
// Achtung: Index wird nicht neu erstellt (Index fehlt jetzt)
unset($array[1]);

// Array (nach werten) sortieren
sort($array); // Zuordnung index - value aufgelöst

// Array Assoziativ Sortieren
asort($array);

// geändertes array ausgeben
echo "<pre>";
print_r($notenliste);
echo "</pre>";


// Benutzerfreundliche Ausgabe des Arrays mit for schleife
for($i = 0; $i < 5; $i++)   {
    echo "Note" .($i+1). ": $notenliste[$i]<br>";
}
echo"<br>";
// Benutzerfreundliche Ausgabe des Arrays mit foreach
// foreach geht nur bei arrays
// foreach($array as $value)
$nummer = 1;
foreach($notenliste as $note) {
    echo"Note $nummer :  $note<br>";
    $nummer++;
}


// Durschnitt berechnen mit vorgefertigten funktionen
$durschnitt = array_sum($notenliste) / count($notenliste);
echo"Der durschnitt ist $durschnitt";

// mit For
$summe = 0;
for($i = 0; $i < count($notenliste); $i++) {
    $summe += $notenliste[$i]; 
}
$summe = $summe/count($notenliste); 

// Höchsten wert ermitteln
// Umständlich zuerst
$schlechteste = 1.0;
for($i = 0; $i < count($notenliste); $i++) {
    if ($notenliste[$i] > $schlechteste) {
        $schlechteste = $notenliste[$i];
    }
}
echo"<br>";
echo"die schlechteste note: $schlechteste <br>";


// Mit Funktionen 
$schlechteste = max($notenliste);
echo"Schlechteste Note: $schlechteste <br>";

$beste = min($notenliste);
echo"Beste Note: $beste";
?>
</body>     
</html>