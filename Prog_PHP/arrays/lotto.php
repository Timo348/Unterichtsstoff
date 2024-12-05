<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotto</title>
</head>
<style>
    * {
        font-family: Helvetica;
    }

    div {
        width: 100px;
        height: 100px;
        border-radius: 80%;

        font-size: 24px;
        text-align: center;
        line-height: 100px;
        font-weight: bold;

        display: inline-block;
        margin: 10px;
        background-image: linear-gradient(to right, darkgray, white );
    }
</style>
<body>
    <h1>Lotto Generator</h1>
    <h3>Ihre Lotto Zahlen Lauten:</h3>
    <?php
for ($i=1; $i<=6; $i++){
        $zahl = rand(1,49);
        echo"<div>$zahl</div>";
    }

    ?>
</body>
</html>