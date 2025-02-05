<?php
// Vorbereitung KA 2

// 1. Portokosten
// UML: holePortokosten(gewicht: float): int
// UML- Schreibweise einer Funktion:
//           myfunction(para1:type1, para2:type2, ...): returntype
// Beispiel: holePortokosten(gewicht: float): integer


function holePortokosten(float $gewicht): int {
    $porto = 0;
    if ($gewicht > 0.0 && $gewicht < 1.0) {
        $porto = 150;
    }
    else if($gewicht > 1.0 && $gewicht < 5.0) {
        $porto = 540;
    }
    else if($gewicht >= 5.0 && $gewicht <= 25.0) {
        $porto = 1290;
    }
    else {
        $porto = -1;
    }
    return $porto;

// Test
$gewicht = 1.3;
$gewicht_f = number_format($gewicht, 1, ",", ".");
$porto = holePortokosten($gewicht);
    if($porto == -1) {
        echo "<p>Das Gewicht ist nicht zulässig.</p>";
    }
    else {
    $porto_euro = $porto / 100;
    $porto_euo_f = number_format($porto_euro, 2, ",", ".");
    echo "<p>Ihr Paket mit $gewicht kg kosten $porto_euro_f Cent.</p>";
}
}

?>