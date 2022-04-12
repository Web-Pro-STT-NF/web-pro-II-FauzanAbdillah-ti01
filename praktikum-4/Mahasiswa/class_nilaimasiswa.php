<?php

class NilaiMahasiswa{
    
    var $nilai;

    function __construct($nilai){
      
        $this->nilai = $nilai;
    }
    function get_nilai(){
        return $this->nilai;
    }
    


    function grade(){
        if ($this->nilai > 85 && $this->nilai < 100){
            return "A";
        }else if($this->nilai > 70 && $this->nilai < 84){
            return "B";
        }else if($this->nilai > 56 && $this->nilai < 69){
            return "C";
        }else if($this->nilai > 36 && $this->nilai < 55){
            return "D";
        }else if($this->nilai > 20 && $this->nilai < 35){
            return "E";
        }else{
            return "Ulang Lagi";
        }
    }

    function hasil(){
        if($this->nilai > 56){
            return "LULUS";
        }else if($this->nilai){
            return "TIDAK LULUS";
        }
    }


}
