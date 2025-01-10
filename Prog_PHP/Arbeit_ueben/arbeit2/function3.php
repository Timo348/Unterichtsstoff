<?php 
function sucheMinBelegung($zimmerliste, bool $weiblich): int {
    $minIndex = -1;
    $minBelegung = 1; 

    for ($index = 0; $index < count($zimmerliste); $index++) {
        if ($weiblich == $zimmerliste[$index]->gibWeiblicheGaeste()) {
            $belegung = $zimmerliste[$index]->gibAnzahlGaeste() / $zimmerliste[$index]->gibAnzahlBetten();

            if ($belegung < $minBelegung) {
                $minBelegung = $belegung;
                $minIndex = $index;
            }
        }
    }
    return $minIndex; 

}

?>