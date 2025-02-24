<?php

// rechteck.class.php

class Rechteck {
    // Attribute (Member-Variablen)
    public float $breite;
    public float $hoehe;

    // Funktion
    function showFlaeche() {
        $flaeche = $this->breite * $this->hoehe;
        echo "<p>Die Fläche des Rechtecks beträgt: $flaeche cm²</p>";
    }
    function showUmfang() {
        $umfang = 2 * $this->breite + 2 * $this->hoehe;
        echo "<p>Der Umfang des Rechtecks beträgt: $umfang cm</p>";
    }
    function istQuadratisch() : bool {
        return ( $this->breite == $this->hoehe );
    }


}

?>