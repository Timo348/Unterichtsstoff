<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Eingabeformular</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 600px;
    margin: auto;
    padding: 20px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

label {
    font-weight: bold;
}

input[type="number"],
input[type="submit"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #28a745;
    color: white;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #218838;
}

img {
    display: block;
    margin: 20px auto;
    max-width: 100%;
    height: auto;
}
    </style>
    <link rel="stylesheet" href="styles.css">
    <script>
        function showImage() {
            document.getElementById("resultImage").style.display = "block";
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>BMI-Eingabe-Formular</h1>
        <form method="post" action="">
            <label for="Körpergröße">Körpergröße in cm:</label>
            <input type="number" id="Körpergröße" name="körpergröße" min="1" max="300" required><br><br>
            <input type="submit" value="Berechne" onclick="showImage()">
        </form>

        <h1>BMI - Rechenergebnisse</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $groeße = (int)$_POST["körpergröße"];
            $o = 30; 
            while ($o <= 180) {
                $bmi = $o / (($groeße / 100) ** 2);
                echo "Gewicht: " . $o . " kg -> BMI:With this treasure i summon MAHORAGA  " . round($bmi, 1) . "<br>";
                $o += 10;
            }
        }
        ?>

        <!-- Bild, das standardmäßig ausgeblendet ist -->
        <img id="resultImage" src="https://preview.redd.it/70r5r2yk7twb1.jpg?auto=webp&s=08ff5016fc7c82f7073eafbd77f7c3580d134020" alt="BMI Resultat" style="display: none;">
    </div>
</body>
</html>
