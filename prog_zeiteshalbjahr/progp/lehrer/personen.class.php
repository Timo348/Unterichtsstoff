<?php
class Schueler extends Person{
    //Attribute (Member)
    private string $klasse;

    //spezieller (parametisierter) Konstruktor
    public function __construct(string $vn, string $nn, string $kl){
        parent::__construct($vn, $nn); //Aufruf des Elternkonstruktor
        $this->setKlasse($kl);
    }


    //settert
    public function setKlasse(string $kl): void {
        $this->klasse = $kl;
    }

    //Getter
    public function getKlasse(): string {
        return $this->klasse;
    }


    //sonstige Funtionen
    public function ausgabe(): void {
        parent::ausgabe();
        echo "Klasse: $this->klasse </p>";
    }

    public function versetzen(): bool{
        if($this->klasse == "2BKI1"){
            $this->klasse = "2BKI2";
            return true;
        }
        return false;
    }
}
?>