<?php
$array = [3, 2, 1, 4, 5, 0, 7];

for ($a = 0; $a < count($array) -2; $a++) {
    for ($i; $i <= count($array) -2; $i++) {
        $var = 0;
        if ($array[$i] > $array[$i + 1]) {
            $var = $array[$i];
            $array[$i] = $array[$i + 1];
            $array[$i + 1] = $var;
        }
    }
}
print_r($array);
print_r("Fortnite test");
function test () : void {
    echo "moin meister";
}
?>