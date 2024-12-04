<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eDicer</title>
</head>
<body>
<form action="">
    <input id="anzahl" name="anzahl" type="number" min="1" required>
    <input type="submit" value="Roll Dice">
</form>

<?php
if (isset($_REQUEST['anzahl'])) {
    $anzahl = $_REQUEST['anzahl'];
    for ($i = 0; $i < $anzahl; $i++) {
        $augen = rand(1, 6);
        echo "<img width='100' height='100' src='$augen.png' alt='$augen Augen'>";
    }
}
?>
</body>
</html>