<?php
function auswerten($augen_array) {

    $gewin_stufen = [
        0 => ["kein gewinn", 0],
        1 => ["Zweier Pasch", 1],
        2 => ["Doppel zweierpasch", 2],
        3 => ["Dreierpasch", 3],
        4 => ["kleine straße", 4],
        5 => ["Full House", 10],
        6 => ["große straße", 100],
        7 => ["Viererpasch", 10],
        8 => ["Kniffel", 1000],
    ];

    $haeufigkeit = array_count_values($augen_array);
    sort($haeufigkeit);

    if (count(array_unique($augen_array)) == 1) {
        return $gewin_stufen[8];
    } elseif ($haeufigkeit === [1, 4]) {
        return $gewin_stufen[7];
    } elseif ($haeufigkeit === [2, 3]) {
        return $gewin_stufen[5];
    } elseif ($haeufigkeit === [1, 1, 3]) {
        return $gewin_stufen[3];
    } elseif ($haeufigkeit === [1, 2, 2]) {
        return $gewin_stufen[2];
    } elseif ($haeufigkeit === [1, 1, 1, 2]) {
        return $gewin_stufen[1];
    } else {
        return $gewin_stufen[0];
    }
}
?>
