<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Dicer</title>
</head>
<body>
<form action="edicer.php">
        <input type="number" min="1" name="anzahl_wuerfel" placeholder="Anzahl Würfe"><br>
        <button type="submit">GAMBLE</button>
    </form>
    <div class="board">
    <?php 
    $augen_array = [];

    $augen = rand(1,6);
    $anzahl = $_REQUEST['anzahl_wuerfel'];
    
    // Array füllen
    for ($i=1; $i<=$anzahl; $i++){
        $augen = rand(1,6);
        $augen_array[] = $augen;
        //echo "<img width = '10%' src = '/bilder/$augen.png' alt='$augen Augen'>\n";
    }
    // Array ausgeben
    /*echo "<pre>";
    print_r($augen_array);
    echo"</pre>";
    */
    sort($augen_array);
    for ($i=0; $i<$anzahl; $i++){
        echo "<img width = '10%' src = '$augen_array[$i].png' alt='$augen_array[$i] Augen'>\n";
    }
    $summe = array_sum($augen_array);
    echo "<div class='ausgabe'>Die Summe der Augenzahlen beträgt $summe</div>";
    echo "</div>"
    ?>
</body>
</html>