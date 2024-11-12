<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alkoholspiegel Rechner</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        form p {
            margin: 10px 0;
            font-size: 18px;
            color: #555;
        }

        input[type="number"], input[type="radio"] {
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
            width: calc(100% - 24px);
            border-radius: 5px;
            border: 1px solid #ddd;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1); 
        }

        input[type="radio"] {
            width: auto;
            margin: 0 10px;
        }

        input[type="submit"], button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            font-size: 18px;
            width: 100%;
            margin-top: 10px;
        }

        input[type="submit"]:hover, button:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 20px;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 5px;
            font-size: 20px;
            color: #333;
        }

    </style>
</head>
<body>

<div class="container">
    <h1>Willkommen auf dem Oktoberfest!</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>Wie viele Maß haben Sie getrunken?</p>
        <input type="number" name="mass" step="0.1" placeholder="Maß in Litern" required><br>

        <p>Wie viel wiegen Sie in kg?</p>
        <input type="number" name="gewicht" placeholder="Gewicht in kg" required><br>

        <p>Männlich oder weiblich?</p>
        <label>
            <input type="radio" name="geschlecht" value="m" required> Männlich
        </label>
        <label>
            <input type="radio" name="geschlecht" value="w" required> Weiblich
        </label><br><br>
        <label>
            <input type="checkbox" name="balkan" value="1"> Balkan?
        </label><br><br>

        <input type="submit" value="Berechnen!">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $mass = floatval($_POST['mass']);
        $gewicht = floatval($_POST['gewicht']);
        $geschlecht = $_POST['geschlecht'];
        $balkan_mode = isset($_POST['balkan']) ? true : false;

        $alkoholMenge = $mass * 5.5 * 8;

        $verteilungsfaktor = ($geschlecht == "m") ? 0.7 : 0.6;

        $maxPromille = ($alkoholMenge / ($gewicht * $verteilungsfaktor)) * 0.8;
        $promille = $maxPromille - 0.5;

        $promille_limit = $balkan_mode ? 4 : 0.3;

        $warnung = ($promille >= $promille_limit) ? "🚫 Sie dürfen nicht mehr Auto fahren." : "✔️ Sie dürfen noch Auto fahren.";


        echo "<div class='result'>";
        echo "<p><strong>Ihr Alkoholspiegel liegt bei " . round(num: $promille, precision: 2) . " Promille.</strong></p>";
        echo "<p><strong>" . $warnung . "</strong></p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
