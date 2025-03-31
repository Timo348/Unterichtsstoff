<?php
abstract class Person { //Dient nur zur Vererbung, kein Objekt erzeugbar
    //Attribute (Member)
    protected string $vorname; //#  protected
    protected string $nachname; // #  protected ; + public ; - private

    //spezieller (parametisierter) Konstruktor
    public function __construct(string $vn, string $nn){
        $this->setVorname($vn);
        $this->setNachname($nn);
    }

    //settert
    public function setVorname(string $vn): void {
        $this->vorname = $vn;
    }

    public function setNachname(string $nn): void {
        $this->nachname = $nn;
    }

    //Getter
    public function getVorname(): string {
        return $this->vorname;
    }

    public function getNachname(): string {
        return $this->nachname;
    }

    //Ausgabe
    public function ausgabe(): void {
        echo "<p>Vorname: $this->vorname <br>";
        echo "Nachname: $this->nachname <br>";
    }
}
?>