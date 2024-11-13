<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="alter">Alter 
        <label for="alter">Alterseingabe: </label>
        <input type="number" name="alter" id="alter">
        <button type="submit">Abschicken</button>
    </form>
</body>
<?php 
$alter = $_REQUEST['alter'] ?? '';
if ($alter == '') {
echo "Dein Alter ist $alter";
}
?>
</html>
