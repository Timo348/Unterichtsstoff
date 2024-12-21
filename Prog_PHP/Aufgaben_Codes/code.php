<?php
function berechneNote($pist, $pmax) {
    $note = 6 - 5 * $pist / $pmax;
    return round($note, 1);
}

$note = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["pist"]) && isset($_POST["pmax"])) {
        $pist = floatval($_POST["pist"]);
        $pmax = intval($_POST["pmax"]);
        $note = berechneNote($pist, $pmax);
    }
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Punkte-Notenberechnung</title>
</head>
<body>
    <h1>Punkte-Notenberechnung</h1>
    <form method="post">
        <label for="pist">Erreichte Punktzahl:</label>
        <input type="number" step="0.1" name="pist" id="pist" required><br><br>
        <label for="pmax">Maximale Punktzahl:</label>
        <input type="number" name="pmax" id="pmax" required><br><br>
        <input type="submit" value="Note berechnen">
    </form>

    <?php
    if ($note !== null) {
        echo "<p>Die berechnete Note ist: " . $note . "</p>";
    }
    ?>
</body>
</html>
