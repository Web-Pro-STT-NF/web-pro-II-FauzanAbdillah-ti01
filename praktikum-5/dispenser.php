<?php

class Dispenser{
    protected static $volume = 4500;
    protected $hargaSegelas = 5000;
    private $volumeGelas = 250;
    public $namaMinuman;
    protected static $penghasilan = 0;

    public function __construct($nM) {
        $this->namaMinuman = $nM;
    }

    public function volume(){
        return self::$volume;
    }

    public function volumeGelas(){
        return $this->volumeGelas;
    }

    public function isi(){
        return number_format(self::$volume);
    }

    public function penghasilan(){
        return number_format(self::$penghasilan, 0, ',', '.');
    }

    public static function tambahVolume($isi){
        if(self::$volume == 4500){
            return "Sudah penuh";
        }elseif (self::$volume + $isi > 4500){
            return "Galon terisi" . number_format(self::$volume) . "ml jika ditambah " . number_format($isi) . "ml akan berlebihan, isi" . 4500 - self::$volume . "ml aja";
        }elseif (self::$volume < 4500) {
            return "<b>Volume Galon saat ini " . number_format(self::$volume) . "ml</b> + {$isi}ml " . ", jadi total <b>Volume Galon Sekarang adalah " . number_format(self::$volume += $isi) . "ml</b>";
        }

    }
}

class Pembeli extends Dispenser{

    protected $namaPembeli;
    protected $jumlahGelas;

    public function __construct ($nmPembeli, $jmlGelas, $nM){

        $this->namaPembeli = $nmPembeli;
        $this->jumlahGelas = $jmlGelas;
        parent::__construct($nM);

        self::$volume -= ((int)$this->volumeGelas() * (int)$this->jumlahGelas);
        self::$penghasilan += ((int)$this->hargaSegelas * (int)$this->jumlahGelas);
    }

    public function strukPenjualan(){

        $struk = 'Nama Pembeli : ' . $this->namaPembeli . ' <br> 
                Nama Minuman : ' . $this->namaMinuman . ' <br> 
                Jumlah Gelas : ' . $this->jumlahGelas . ' gelas<br> 
                Sisa Isi Wadah Minuman: ' . $this->isi() . 'ml <br>
                <b>Penghasilan Bertambah Rp. ' . number_format($this->hargaSegelas * $this->jumlahGelas, 0, ',', '.') . '<br>
                Total Penghasilan Saat Ini: Rp. ' . $this->penghasilan() . '</b>';
        return $struk;
    }
}
