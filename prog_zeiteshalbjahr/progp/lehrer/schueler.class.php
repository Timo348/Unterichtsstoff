<?php

class Schueler {
    private string $vorname;
    private string $nachname;
    private string $klasse;

public function __construct(string $vn, string $nn, string $kl){
    $this->setVorname($vn);
    $this->setNachname($nn);
    $this->setKlasse($kl);
}

private function setVorname(string $vn):void{
    $this->vorname = $vn;
}

private function setNachname(string $nn):void{
    $this->nachname = $nn;
}

private function setKlasse(string $kl):void{
    $this->klasse = $kl;
}


private function getVorname():string{
    return $this->vorname;
}

private function getNachname():string{
    return $this->nachname;
}

private function getKlasse():string{
    return $this->klasse;
}

public function ausgeben():void{
    echo "<p>Schüler: $this->vorname<br>";
    echo "Schüler: $this->nachname<br>";
    echo "Klasse: $this->klasse </p><br>";
}

public function versetzen():bool{
    if($this->klasse == "2BKI1") {
        $this->klasse = "2BKI1";
        $this->klasse++;
        return true;
    }
    return false;
}
}


?>