<?php
require_once "class_persegipanjang.php";
$coba1 = new Persegipanjang(12, 4);
$coba2 = new Persegipanjang(8, 3);

echo "<br/>Luas Persegi Panjang 1 =".$coba1->luas()."cm";
echo "<br/>Luas Persegi Panjang 2 =".$coba2->luas()."cm";

echo "<br/>Keliling Lingkaran 1 =" .$coba1->keliling()."cm";
echo "<br/>Keliling Lingkaran 2 =" .$coba2->keliling()."cm";