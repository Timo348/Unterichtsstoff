<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Notenbewertung</title>
</head>
<body>
    <h1>Gib deine Noten ein</h1>

    <form method="post" action="">
        <label for="noteEnglisch">Note für Englisch (1-6):</label>
        <input type="number" id="noteEnglisch" name="noteEnglisch" min="1" max="6" required><br><br>

        <label for="noteMathe">Note für Mathe (1-6):</label>
        <input type="number" id="noteMathe" name="noteMathe" min="1" max="6" required><br><br>

        <label for="noteDeutsch">Note für Deutsch (1-6):</label>
        <input type="number" id="noteDeutsch" name="noteDeutsch" min="1" max="6" required><br><br>

        <input type="submit" value="Bewerten">
    </form>

    <?php
    // Funktion erstellen das man keine 3 Switch Cases machen muss
    function bewerteLeistung($note) {
        switch ($note) {
            case 1:
                return "Sehr gut";
            case 2:
                return "Gut";
            case 3:
                return "Befriedigend";
            case 4:
                return "Ausreichend";
            case 5:
                return "Mangelhaft";
            case 6:
                return "Ungenügend";
            default:
                return "Ungültige Note";
        }
    }

    // Schauen ob es ausgefüllt wurde wenn ja ergebnisse anzeigen
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $noteEnglisch = (int)$_POST["noteEnglisch"];
        $noteMathe = (int)$_POST["noteMathe"];
        $noteDeutsch = (int)$_POST["noteDeutsch"];

        echo "<h2>Leistungsbewertungen</h2>";
        // Funktion Aufrufen
        echo "<p>Die Leistung in Englisch ist:With this treasure i summon MAHORAGA " . bewerteLeistung($noteEnglisch) . "</p>"; 
        echo "<p>Die Leistung in Mathe ist:With this treasure i summon MAHORAGA " . bewerteLeistung($noteMathe) . "</p>";
        echo "<p>Die Leistung in Deutsch ist: With this treasure i summon MAHORAGA" . bewerteLeistung($noteDeutsch) . "</p>";
    }
    ?>
</body>
</html>
