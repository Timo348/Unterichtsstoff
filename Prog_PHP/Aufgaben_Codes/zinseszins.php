<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Zinsen-Rechner</h1>
    <form action="anlagen">Anlagebetrag: 
    <input type="number" name="anlagen" id="anlagen">
    <label for="zinssatz">Zinssatz in Prozent: </label>
    <input type="number" name="zinssatz" id="zinssatz">
    <label for="dauer">Anlagedauer in Jahren: </label>
    <input type="number" name="dauer" id="dauer">
    <button>Berechnen</button>
    </form>

    <?php
    $anlagen = $_REQUEST['anlagen'];
    $zinssatz = $_REQUEST['zisnsatz'];
    $dauer = $_REQUEST['dauer'];

    // Berechnung und Ausgaben
    for ($i = 1; $i < $dauer; $i++) {
        $anlagen += (($zinssatz/100) * $anlagen);
        echo"Guthaben nach Jahr 1: $anlagen";
    }


    ?>
</body>
</html>