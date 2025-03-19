<?php
require_once "personen.class.php";
class Lehrer extends Person {
    //Attribute (Member)
    private int $gehaltsstufe;

    //spezieller (parametisierter) Konstruktor
    public function __construct(string $vn, string $nn, int $gs){
        parent::__construct($vn, $nn);
        $this->setGehaltsstufe($gs);
    }


    //settert
    public function setGehaltsstufe(int $gs): void {
        $this->gehaltsstufe = $gs;
    }

    //Getter
    public function getGehaltsstufe(): int {
        return $this->gehaltsstufe;
    }

    public function ausgabe(): void { //Funktion ausgabe() der Elternklasse überschriben => erweitern
        parent::ausgabe();
        echo "Gehaltsstufe: A$this->gehaltsstufe </p>";
    }

    public function befoerdern(): bool{
        if($this->gehaltsstufe < 16){
            $this->gehaltsstufe++;
            return true;
        }
        return false;
    }
}
?>