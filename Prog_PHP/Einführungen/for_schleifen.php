<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kontrollstrukturen: Schleifen</h1>
<?php 

// for i in range (1,11)
// print (i)

echo "<h2>For-Schleife (kopfgesteurte Schleife)</h2>";

// for(Startwert; Wiederhol-Bedinung,   )
for($i = 1; $i <= 10; $i ++) { // Schleifenkopf
    echo "$i<br>"; // Schleifenrumpf
} // Schleifenschwanz

echo"<p>========================</p>";

for($i = 10; $i >= 1; $i--) { 
    echo "$i<br>"; 
} 

echo"<p>========================</p>";

for($i = -100; $i <= 100; $i+=20) { 
    echo "$i<br>"; 
}

?>
    <img src="../../Bilder/thukuna.png" alt="Thukuna">
</body>
</html>