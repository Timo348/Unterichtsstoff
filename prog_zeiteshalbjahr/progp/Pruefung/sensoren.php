<?php 
class Sensor extends Artikel {
    private string $eingangssignal;
    private string $ausgangssignal;


    public function __construct(int $nr, string $bez, int $best, int $es, string $as) {
        parent::__construct($nr, $bez, $best);
        switch ($es) {
            case 0:
                $this->eingangssignal = "Thermisch";
                break;
            case 1:
                $this->eingangssignal = "Chemisch";
                break;
            case 2:
                $this->eingangssignal = "Meschanisch";
                break;
            case 3:
                $this->eingangssignal = "Magnetisch";
                break;
            default:
                $this->eingangssignal = "Unbekannt";
        }
    }
    }


    
}

?>