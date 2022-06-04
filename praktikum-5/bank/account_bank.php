<?php
require_once 'class_account.php';

class AccountBank extends Account{
    public $customer;
    static $biayaAdmin = 3500;

    function __construct($no, $cs, $saldo){
        parent::__construct($no,$saldo);
        $this->customer = $cs;
    }

    public function transfer($abTujuan, $uang){
        $abTujuan->deposit($uang);
        $this->withdraw(self::$biayaAdmin);
        $this->withdraw($uang);
    }

    public function cetak(){
        parent::cetak();
        echo '<br>Customer :' .$this->customer;
    }

    public function deposit($uang){
        parent::deposit($uang);
    }
}

