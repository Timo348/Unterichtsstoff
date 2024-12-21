<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eDicer</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>E DICER</h1>
    <a href="">Würfeln</a>
    <div>
        <?php 
        include 'functions.php';

        $augen_array = [];
        $anzahl = 5;

        for ($i = 1; $i <= $anzahl; $i++) {
            $augen = rand(1, 6);
            $augen_array[] = $augen;
        }

        sort($augen_array);

        for ($i = 0; $i < $anzahl; $i++) {
            echo "<img src='{$augen_array[$i]}.png' alt='{$augen_array[$i]} Augen'>\n";
        }

        $summe = array_sum($augen_array);
        echo "<h2>Die Summe der Augenzahlen beträgt $summe</h2>";

        echo auswerten($augen_array);
        ?>
    </div>
</body>
</html>