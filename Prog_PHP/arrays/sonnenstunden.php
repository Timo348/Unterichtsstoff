<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$sonnenstunden = [8.9, 5.7, 8.3, 9.0, 0.5];

echo "Ausgabe mit for-Schleife:\n";
for ($i = 0; $i < count($sonnenstunden); $i++) {
    echo $sonnenstunden[$i] . "\n";
}
echo "<br>";
$sonnenstunden[] = 4.8;

echo "Ausgabe mit foreach-Schleife:\n";
foreach ($sonnenstunden as $wert) {
    echo $wert . "\n";
}
echo "<br>";
echo "Ausgabe mit var_dump:\n";
var_dump($sonnenstunden);
?>

</body>
</html>