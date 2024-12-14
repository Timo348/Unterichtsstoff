<?php

$messwerte = [12.0, 11.5, 14.0, 12.2, 12.0];

function calculateAverage($array) {
    $sum = 0.0;
    foreach ($array as $value) {
        $sum += $value;
    }
    return $sum / count($array);
}

function findMax($array) {
    $maxValue = $array[0];
    foreach ($array as $value) {
        if ($value > $maxValue) {
            $maxValue = $value;
        }
    }
    return $maxValue;
}

function findMin($array) {
    $minValue = $array[0];
    foreach ($array as $value) {
        if ($value < $minValue) {
            $minValue = $value;
        }
    }
    return $minValue;
}


$average = calculateAverage($messwerte);
$maxValue = findMax($messwerte);
$minValue = findMin($messwerte);

echo "Messwerte: " . implode(", ", $messwerte) . "<br>";
echo "Durchschnitt: " . $average . "<br>";
echo "Maximalwert: " . $maxValue . "<br>";
echo "Minimalwert: " . $minValue . "<br>";
?>
