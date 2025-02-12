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
    $r1 = new Rechteck();

    $r1->breite = 5.3;
    $r1->hoehe = 7.4;

    $r1->showFlaeche();
    $r1->showUmfang();

    echo $r1 -> istQuadratisch() ? "Das Rechteck ist quadratisch" : "Das Rechteck ist nicht quadratisch";

    $r2 = new Rechteck();
    $r2->breite = 3.5;
    $r2->hoehe = 4.2;

    $r2->showFlaeche();
    $r2->showUmfang();
?>
</body>
</html>