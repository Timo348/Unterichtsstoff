<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // rechteck.class.php
    require_once 'rechteck.class.php';

    // Objekterezeugung (Objekt-Instanzierung)
    // mit hilfe des Konstruktors
    //$r1 = new Rechteck();
    $r1 = new Rechteck(3.5, 4.2);
    // Jetzt die Öffentlichen Methoden verwenden
    $r1 -> setBreite(5.3);
    $r1 -> setHoehe(7.4);   

    echo "<h2>Rechteck 1</h2>";
    // geht nicht da attribute Private sind
    //echo "<p>Die Breite des Rechtecks beträgt: $r1->breite cm</p>";
    //echo "<p>Die Höhe des Rechtecks beträgt: $r1->hoehe cm</p>";

    echo "<p>Breite : ".$r1->getBreite()." cm</p>";
    echo "<p>Höhe: ".$r1->getHoehe()." cm</p>";

    $r1->showFlaeche();
    $r1->showUmfang();
    echo $r1 -> istQuadratisch() ? "Das Rechteck ist quadratisch" : "Das Rechteck ist nicht quadratisch";

?>
</body>
</html>