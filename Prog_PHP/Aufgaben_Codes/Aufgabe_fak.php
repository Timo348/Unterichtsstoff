<?php
// Funktion zur Berechnung der Fakultät
function fak($n) {
    if ($n < 0) {
        return "Ungültige Eingabe: Nur natürliche Zahlen erlaubt.";
    }
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

// Überprüfen, ob das Formular abgeschickt wurde
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = intval($_POST["number"]);
    $result = fak($input);
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fakultätsberechnung</title>
    <style>
        body {
            background-image: url('rentier.png');
            background-size: cover;
            background-repeat: no-repeat;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        h1 {
            margin-top: 50px;
            font-size: 3em;
            text-shadow: 2px 2px 4px #000;
        }
        form {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            display: inline-block;
            border-radius: 10px;
        }
        label, input, button {
            display: block;
            margin: 10px auto;
        }
        input {
            padding: 10px;
            border: none;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #ff6347;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #ff4500;
        }
        h2 {
            margin-top: 20px;
            font-size: 2em;
            text-shadow: 2px 2px 4px #000;
        }
    </style>
</head>
<body>
    <h1>Fakultätsberechnung</h1>
    <form method="post">
        <label for="number">Geben Sie eine natürliche Zahl ein:</label>
        <input type="number" id="number" name="number" min="0" required>
        <button type="submit">Berechnen</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Ergebnis</h2>
        <p>Die Fakultät von <?php echo $input; ?> ist: <?php echo $result; ?></p>
    <?php endif; ?>
</body>
</html>
