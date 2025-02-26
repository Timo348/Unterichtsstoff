<?php
class Lehrer extends Person{
    //Attribute (Member)

    private int $gehaltsstufe;

    //spezieller (parametrisierter) Konstruktor
    public function __construct(string $vn, string $nn, int $gs){
        parent::__construct($vn, $nn);
        $this->setGehaltsstufe($gs);
    }


    private function setGehaltsstufe(int $gs):void{
        $this->gehaltsstufe = $gs;
    } 

    private function getGehaltsstufe():int{
        return $this->gehaltsstufe;
    } 

    public function ausgeben():void{
        echo "<p>Lehrer: $this->vorname<br>";
        echo "Lehrer: $this->nachname<br>";
        echo "Gehaltsstufe: A$this->gehaltsstufe </p><br>";
    }
    
    public function befoerden():bool{
        if($this->gehaltsstufe < 16) {
            $this->gehaltsstufe++;
            return true;
        }
        return false;
    }


}

?> 