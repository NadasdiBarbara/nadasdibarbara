<?php

namespace Barbikaaa\Halloween\Models;



class Lako{
    public string $nev;

    public function __construct(string $nev)
    {
        $this->nev = $nev;
    }
    public function getNev():string
    {
        return $this->nev;
    }
    
}