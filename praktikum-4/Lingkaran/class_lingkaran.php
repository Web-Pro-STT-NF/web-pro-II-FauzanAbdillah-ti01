<?php

class Lingkaran {
    public $jari;
    const PHI = 3.14;

    function __construct($r){
        $this->jari = $r;
    }

    function luas(){
        return self::PHI*$this->jari*$this->jari;
    }
    function keliling(){
        return 2*self::PHI*$this->jari;
    }
}