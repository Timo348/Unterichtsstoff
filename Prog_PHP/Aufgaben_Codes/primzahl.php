<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primzahl Rechner</title>
</head>
<body>
    <?php
    $i = 1;

    while ($i < 100) {
        if ($i <= 1) {
            echo "$i ist keine Primzahl<br>";
        } else {
            $isPrime = true;


            for ($j = 2; $j <= sqrt($i); $j++) {
                if ($i % $j == 0) {
                    $isPrime = false;
                    break; 
                }
            }

            if ($isPrime) {
                echo "$i ist eine Primzahl<br>";
            } else {
                echo "$i ist keine Primzahl<br>";
            }
        }

        $i++;
    }
    ?>
</body>
</html>
