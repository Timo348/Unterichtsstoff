<?php
// Schwierigkeitsgrad: 2

// Quersumme
// 37652 => Quersumme = 3 + 7 + 6 + 5 + 2 = 23
// UML: holequersumme(zahl: int): int
$zahl = 37652;
function holequersumme(int $zahl): int {
    $quersumme = 0;
    while($zahl > 0) {
        $quersumme += $zahl % 10;
        $zahl = (int)($zahl / 10);
    }
    return $quersumme;
}
$quersumme = holequersumme($zahl);
echo $quersumme;
?>