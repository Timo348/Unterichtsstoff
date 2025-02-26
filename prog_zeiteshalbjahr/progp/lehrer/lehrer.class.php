<?php
class Lehrer {
    //Attribute (Member)
    private string $vorname;
    private string $nachname;
    private int $gehaltsstufe;

    //spezieller (parametrisierter) Konstruktor
    public function __construct(string $vn, string $nn, int $gs){
        $this->setVorname($vn);
        $this->setNachname($nn);
        $this->setGehaltsstufe($gs);
    }

    // Öffentliche Methoden
    // Setter
    private function setVorname(string $vn):void{
        $this->vorname = $vn;
    }   

    private function setNachname(string $nn):void{
        $this->nachname = $nn;
    } 
    private function setGehaltsstufe(int $gs):void{
        $this->gehaltsstufe = $gs;
    } 

    // Getter
    private function getVorname():string{
        return $this->vorname;
    }   

    private function getNachname():string{
        return $this->nachname;
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