<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once "schueler.class.php";
require_once "lehrer.class.php";
require_once "person.class.php";

// Lehrer Test
echo "<h2>Lehrer Test</h2>";
$l = new Lehrer("Michael", "Staudt", 13);
$l->ausgeben();

if($l ->befoerden()){
    echo "Lehrer wurde befördert";
    $l->ausgeben();
}
else{
    echo "Lehrer konnte nicht befördert werden";

}

// Schüler Test
echo "<h2>Schüler Test</h2>";
$s = new Schueler("Max", "Mustermann", "2BKI1");
$s->ausgeben();

// Schüler versetzen
if($s->versetzen()){
    echo "Schüler wurde versetzt";
    $s->ausgeben();
}
else{
    echo "Schüler konnte nicht versetzt werden da er bereits in 2. Klasse ist";
}


// Person Test
echo "<h2>Person Test</h2>";
$p = new Person("Max", "Mustermann");
$p->ausgeben();

?>
</body>
</html>