<?php
phpinfo();
//variabelKonstan
define('PHI',3.14);
define('DBNAME','inventori');
define('DBSERVER','localhost');

$jari = 12;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo 'Jika Jari-jarinya =' .$jari;
echo '<br/>Luasnya = '.$luas;
echo '<br/>Kelilingnya = '.$kll;
?>
<hr/>
<?php
echo 'Nama databasenya : '.DBNAME;
echo '<br/>Lokasi databasenya ada di '.DBSERVER;
//variabelSystem
echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
echo '<br/>Nama File '.$_SERVER["PHP_SELF"];
//variabelUser
$nama = 'Jay';
$umur = 19;
$berat = 68.9;

echo 'Nama : ' . $nama;
echo '<br/>Umur : ' . $umur.' Tahun';
echo '<br/>Berat : '.$berat.' Kg';

echo "<br/><br/>Hallo $nama Apa kabar";

?>