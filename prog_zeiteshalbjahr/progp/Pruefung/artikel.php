<?php

abstract class Artikel {
    protected int $artikelnr;
    protected string $bezeichnung;
    protected int $bestand;

    public function __construct(int $artikelnr, string $bezeichnung, int $bestand) {
        $this->artikelnr = $artikelnr;
        $this->bezeichnung = $bezeichnung;
        $this->bestand = $bestand;
    }

    public function ausbuchen(int $menge): string {
        if ($this->bestand < $menge) {
            return "<p>Buchung nicht möglich</p>";
        }
        else {
            $this->bestand = $this->bestand - $menge;
            return "<p>Buchung erfolgreich</p>";
        }
    }
}
?>