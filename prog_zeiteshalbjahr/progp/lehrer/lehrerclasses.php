<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require_once "lehrer.class.php";
$l = new Lehrer("Hans", "Müller", 1);
$l->ausgeben();

?>
</body>
</html>