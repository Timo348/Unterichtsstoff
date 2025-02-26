<?php

class Person {
    private string $vorname;
    private string $nachname;


public function __construct(string $vn, string $nn){
    $this->setVorname($vn);
    $this->setNachname($nn);
}

private function setVorname(string $vn):void{
    $this->vorname = $vn;
}

private function setNachname(string $nn):void{
    $this->nachname = $nn;
}

private function getVorname():string{
    return $this->vorname;
}

private function getNachname():string{
    return $this->nachname;
}

// Sonstige Funktionen 

public function ausgeben():void{
    echo "<p>Vorname: $this->vorname<br>";
    echo "Nachname: $this->nachname</p><br>";
}
}
?>