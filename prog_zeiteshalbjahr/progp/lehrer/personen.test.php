<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lehrer Gehaltsstufen</title>
</head>
<body>
    <?php
    ini_set("display_errors", "on");
    require_once "personen.class.php";
    require_once "lehrer.class.php";
    require_once "schueler.class.php";

    echo "<h2>Lehrer-Test</h2>";
    $l = new Lehrer("Michael", "Staudt", 13);
    $l->ausgabe();
    if($l->befoerdern()) echo "<p>Beförderung erfolgreich <br> Neue Stufe: A".$l->getGehaltsstufe()."</p>";
    else echo "<p>Beförderung nicht erfolgreich, da höchste Gehaltsstufe eirreicht</p>";

    //Schüler - Test
    echo "<h2>Schüler ausgabe</h2>";
    $s = new Schueler("Noah", "Reichelt", "2BKI1");
    $s->ausgabe();

    if($s->versetzen()){
        echo "<p>Versetzung erfolgreich <br>";
        echo "Neue Klasse: ".$s->getKlasse()."</p>";
    }
    else {
        echo "<p>Versetzung nicht erfolgreich, da 2. Klassenstufe erreicht</p>";
    }

    //Personen - Test
    echo "<h2>Personen-Test</h2>";
    echo "<p>Nicht möglich, da Klasse abstract</p>";
    /*
    echo "<h2>Personen-Test</h2>";
    $p = new Person("Luidischi", "Lurch");
    $p->ausgabe();*/

    ?>
</body>
</html>