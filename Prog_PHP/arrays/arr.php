<?php 

// assoziativen eindimensionalen Array
$anwesenheit=["Mo"=> 15, "Di" => 20];

// Ausgabe dr Arrayinformation
var_dump($anwesenheit);
echo "<br>";

// hinzufügen und Ausgabe eines Elements
$anwesenheit["Mi"] = 22;
echo $anwesenheit ["Mi"]. "<br>";

// hinzufügen eines Elements und Ausgabe aller Arrayinfos inkl. Datentypen
$anwesenheit["Do"] = 10;
var_dump($anwesenheit);
echo "<br>";
?>