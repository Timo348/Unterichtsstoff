<?php

// rechteck.class.php

class Rechteck {
    // Attribute (Member-Variablen)
    private float $breite;
    private float $hoehe;


    // Konstruktor
    // Standard Konstruktor (muss entfallen da automatisch erzeugt wird)
    // public function __construct() {}
    // Spezeiller (parametrisierter) Konstruktor
    public function __construct($b, $h) {
        $this->setBreite($b);
        $this->setHoehe($h);
    }   


    // Öffentliche Zugrissmethoden
    // Setter
    public function setBreite(float $b) : void {
        if ($b > 0) { $this->breite = $b; }
        else { $this->breite = 0.0; }
    }
    public function setHoehe(float $h) : void {
        if ($h > 0) { $this->hoehe = $h; }
        else { $this->hoehe = 0.0; }
    }

    public function getBreite() : float {
        return $this->breite;
    }
    public function getHoehe() : float {
        return $this->hoehe;
    }


      

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