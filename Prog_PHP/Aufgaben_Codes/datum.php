<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datum Prüfen</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            max-width: 600px;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            text-align: center;
            animation: fadeIn 1s ease-out;
        }

        h1 {
            font-size: 2.2em;
            color: #333;
            margin-bottom: 20px;
            position: relative;
        }

        h1:after {
            content: "";
            display: block;
            width: 80px;
            height: 4px;
            background-color: #66a6ff;
            margin: 10px auto 0;
            border-radius: 2px;
        }

        p {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 15px;
        }

        .result {
            font-size: 1.3em;
            font-weight: bold;
            color: #2e7d32; /* Grün für gültige Daten */
            margin-bottom: 15px;
            animation: popIn 0.5s ease-out;
        }

        .result.invalid {
            color: #d32f2f; /* Rot für ungültige Daten */
        }

        .details {
            background-color: #f1f8e9;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 1.2em;
            color: #333;
        }

        .details span {
            font-weight: bold;
            color: #66a6ff;
        }

        .quarter {
            background-color: #e3f2fd;
            padding: 10px;
            border-radius: 8px;
            font-size: 1.2em;
            color: #1e88e5;
            margin-bottom: 10px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes popIn {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #999;
        }

        a {
            color: #66a6ff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Datum Prüfen</h1>
        <?php
        $datum = "29.10.2020";
        $datum_array = explode(".", $datum);

        $tag = (int)$datum_array[0];
        $monat = (int)$datum_array[1];
        $jahr = (int)$datum_array[2];

        $istschaltjahr = false;
        if($jahr % 4 == 0 && $jahr % 100 != 0 || $jahr % 400 == 0) {
            $istschaltjahr = true;
        }

        echo "<div class='details'>";
        echo "Tag: <span>$tag</span><br>";    
        echo "Monat: <span>$monat</span><br>";    
        echo "Jahr: <span>$jahr</span>";
        echo "</div>";

        switch($monat) {
            case 1: case 3: case 5: case 7: case 8: case 10: case 12: 
                $tage_max = 31; break;
            case 4: case 6: case 9: case 11: 
                $tage_max = 30; break;
            case 2: 
                $tage_max = $istschaltjahr ? 29 : 28; break;
            default: 
                $tage_max = -1;
        }

        echo "<p>Der $monat-te Monat hat <strong>$tage_max Tage</strong></p>";

        $datumistgueltig = false;
        if (
            $tag >= 1 && $tag <= $tage_max &&
            $monat >= 1 && $monat <= 12 &&
            $jahr >= 0 && $jahr <= 3000
        ) {
            $datumistgueltig = true;
        }

        if ($datumistgueltig) {
            echo "<p class='result'>Das Datum $datum ist gültig</p>";
        } else {
            echo "<p class='result invalid'>Das Datum $datum ist ungültig</p>";
        }

        $quartal = ceil($monat / 3);
        echo "<p class='quarter'>Das Datum liegt im <strong>$quartal. Quartal</strong></p>";
        ?>
        <div class="footer">
            <p>&copy; 2024 Datum Prüfen | <a href="#">Datenschutz</a> | <a href="#">Impressum</a></p>
        </div>
    </div>
</body>
</html>
