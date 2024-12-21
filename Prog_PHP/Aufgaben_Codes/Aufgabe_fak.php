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
            background-image: linear-gradient(to right, #4facfe, #00f2fe);
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            text-align: center;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            font-size: 3.5rem;
            text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
        }
        form {
            background: rgba(0, 0, 0, 0.8);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            padding: 40px;
            border-radius: 15px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }
        label {
            font-size: 1.2rem;
            margin-bottom: 10px;
            display: block;
            color: #ddd;
        }
        input {
            width: calc(100% - 20px);
            padding: 15px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            margin-bottom: 20px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            outline: none;
            transition: 0.3s;
        }
        input:focus {
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 5px 20px rgba(0, 255, 255, 0.5);
        }
        button {
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            font-weight: bold;
            background: linear-gradient(to right, #ff512f, #dd2476);
            color: white;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        button:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(255, 80, 80, 0.6);
        }
        .result-container {
            background: rgba(0, 0, 0, 0.85);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 15px;
            margin-top: 20px;
            max-width: 400px;
            animation: fadeIn 1s ease-in-out;
        }
        h2 {
            margin-top: 0;
            font-size: 2rem;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3);
        }
        p {
            font-size: 1.2rem;
            margin-top: 10px;
            color: #f1f1f1;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .footer {
            position: absolute;
            bottom: 10px;
            text-align: center;
            width: 100%;
            font-size: 0.9rem;
            color: #ddd;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Fakultätsberechnung</h1>
        <form method="post">
            <label for="number">Geben Sie eine natürliche Zahl ein:</label>
            <input type="number" id="number" name="number" min="0" required>
            <button type="submit">Berechnen</button>
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <div class="result-container">
                <h2>Ergebnis</h2>
                <p>Die Fakultät von <?php echo $input; ?> ist: <?php echo $result; ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
