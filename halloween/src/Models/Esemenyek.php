<?php
 namespace Barbikaaa\Halloween\Models;

use DateTime;

class Esemenyek{
    public string $nev;
    public Lako $szervezo;
    public array $resztvevok;
    public DateTime $ido; 

    public function __construct($nev, $szervezo,$resztvevok,$ido){
        $this->nev = $nev;
        $this->szervezo = $szervezo;
        $this->resztvevok = $resztvevok;
        $this->ido = $ido;

    }
    public function getNev():string
    {
        return $this->nev;
    }
    public function getSzervezo():Lako
    {
        return $this->szervezo;
    }
    public function getResztvevo():array
    {
        return $this->resztvevok;
    }
    public function getIdo():DateTime
    {
        return $this->ido;
    }

}