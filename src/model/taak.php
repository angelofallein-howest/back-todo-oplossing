<?php

class Taak{
    public $id;
    public $titel;
    public $prioriteit;
    public $afgewerkt;


    public function __construct($parId=-1, $parTitel="", $parPrioriteit=-1, $parAfgewerkt=false){
        $this->id = $parId;
        $this->titel = $parTitel;
        $this->prioriteit = $parPrioriteit;
        $this->afgewerkt = $parAfgewerkt;
    }

    public function getAfgewerktTekst(){
        // is het attribuut afgewerkt 0 dan rerturn je de string “afgewerkt”.
        // zoniet return je de string “bezig”
        if ($this->afgewerkt){
            return "afgewerkt";
        }else{
            return "bezig";
        }
    }
    public function getPrioriteitTekst(){
        // return de string “laag”, “medium” of “hoog” terug.
        // Afhankelijk van de waarde van het attribuut prioriteit.
        // (1=laag, 2=medium, 3=hoog)
        switch ($this->prioriteit) {
            case 1:
                return "laag";
                break;
            case 2:
                return "medium";
                break;
            case 3:
                return "hoog";
                break;
            default:
                return "niet gekend";
        }
    }

}


?>