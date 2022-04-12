<?php
include_once "class_lingkaran.php";

echo "Nilai PHI : " . Lingkaran::PHI;
$objek1 = new Lingkaran(10);
$objek2 = new Lingkaran(12);

echo "<br/>";
echo "<br/>Luas Lingkaran Pertama =" .$objek1->luas();
echo "<br/>Luas Lingkaran Ke-2 =" .$objek2->luas();

echo "<br/>Keliling Lingkaran Pertama =" .$objek1->keliling();
echo "<br/>Keliling Lingkaran Ke-2 =" .$objek2->keliling();