<?php
// Uml Schreibweise
// function NameFunction($übergabeparameter): rückgabewert { function }

$a = $_REQUEST['Zahl1'];
$b = $_REQUEST['Zahl2'];
$auswahl = $_REQUEST['auswahl'];

function dividiere($a, $b): float {
    $summe = $a / $b;
    return $summe;
}
function subtrahiere($a, $b): float {
    $summe = $a - $b;
    return $summe;
}
function addiere($a, $b): float {
    $summe = $a + $b;
    return $summe;
}
function multiplieziere($a, $b): float {
    $summe = $a * $b;
    return $summe;
}

if ($auswahl == "addiere") {
    echo "Die Summe ist: " . addiere($a, $b);
} elseif ($auswahl == "subtrahiere") {
    echo "Die Summe ist: " . subtrahiere($a, $b);
} elseif ($auswahl == "multiplieziere") {
    echo "Die Summe ist: " . multiplieziere($a, $b);
} elseif ($auswahl == "dividiere") {
    echo "Die Summe ist: " . dividiere($a, $b);
} else {
    echo "Fehler";
}

?>