<?php
require_once 'dispenser.php';

$penjual = new Dispenser("Thai Tea");
echo '<br>Vending Machine :'. $penjual->namaMinuman;
echo '<br>Memiliki volume, sebesar :' . number_format($penjual->volume()) . 'ml</b>';
echo '<br>';
echo '<hr>';

$pembeli1 = new Pembeli('Hyunsik', 3, 'Thai Tea');
echo $pembeli1->strukPenjualan();
echo '<br>';
echo '<hr>';

$pembeli2 = new Pembeli('Kenan', 2, 'Thai Tea');
echo $pembeli2->strukPenjualan();
echo '<br>';
echo '<hr>';

echo Dispenser::tambahVolume(250);