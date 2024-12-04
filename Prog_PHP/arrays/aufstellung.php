<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aufstellung</title>
</head>
<body>
    <form action="">
        <label for="auswahl">Wähle eine Option:</label>
        <select name="anzeigenauswahl" id="auswahl">
            <option value="Startaufstellung">Startaufstellung</option>
            <option value="Ersatzspieler">Ersatzspieler</option>
            <option value="Kader">Kader</option>
        </select>
        <button type="submit">Anzeigen</button>
    </form>

    <?php
    // Arrays für die Aufstellung und Ersatzspieler
    $aufstellung = ["Armin", "Batu", "Kai", "Paul", "Sven", "Milan"];
    sort($aufstellung);
    $ersatzspieler = ["Chris", "Dennis", "Emin"];
    sort($ersatzspieler);

    // Funktion zur Ausgabe
    function ausgabe($typ, $aufstellung, $ersatzspieler) {
        if ($typ == "Startaufstellung") {
            echo "<h2>Startaufstellung:</h2>";
            $nummer = 1;
            foreach ($aufstellung as $spieler) {
                echo "Spieler $nummer: $spieler<br>";
                $nummer++;
            }
        } elseif ($typ == "Ersatzspieler") {
            echo "<h2>Ersatznigger:</h2>";
            $nummer = 1;
            foreach ($ersatzspieler as $spieler) {
                echo "Spieler $nummer: $spieler<br>";
                $nummer++;
            }
        } elseif ($typ == "Kader") {
            echo "<h2>Kader:</h2>";
            echo "<h3>Startaufstellung:</h3>";
            $nummer = 1;
            foreach ($aufstellung as $spieler) {
                echo "Spieler $nummer: $spieler<br>";
                $nummer++;
            }
            echo "<h3>Ersatzspieler:</h3>";
            $nummer = 1;
            foreach ($ersatzspieler as $spieler) {
                echo "Spieler $nummer: $spieler<br>";
                $nummer++;
            }
        } else {
            echo "<p>Bitte eine gültige Option auswählen.</p>";
        }
    }

    // Verarbeitung der Benutzerauswahl

        $auswahl = $_REQUEST['anzeigenauswahl'];
        ausgabe($auswahl, $aufstellung, $ersatzspieler);
    ?>
</body>
</html>
