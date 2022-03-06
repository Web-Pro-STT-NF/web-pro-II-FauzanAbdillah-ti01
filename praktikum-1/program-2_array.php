<?php
$ar_buah = ["Pepaya", "Mangga","Pisang","Jambu" ];
//cetak buah index ke-2
echo 'Buah index ke-2 = '.$ar_buah[2];
//cetak jumlah buah
echo '<br/>Jumlah Buah = ' . count($ar_buah);
//cetak semua buah
echo '<br/>Daftar Semua Buah';
echo '<ol>';
foreach($ar_buah as $buah){
echo '<li>'. $buah .'</li>';
}
echo '</ol>';
//tambah buah
$ar_buah[]="Durian";
//hapus buah index ke-1
unset($ar_buah[1]);
//ubah index ke-2 jadi buah lain
$ar_buah[2]="Manggis";
//cetak buah sekaligus indexnya
echo '<ul>';
foreach($ar_buah as $k => $v){
echo '<li> Buah index Ke- ' . $k .' adalah '. $v .'</li>';
}
echo '</ul>';
?>

<?php
//tabel mahasiswa
$nisa1 = ['id'=>1,'nama'=>'Soham','nis'=>'011022438','uts'=>80,'uas'=>84,'tugas'=>78]; 
$nisa2 = ['id'=>2,'nama'=>'Jechan','nis'=>'011022129','uts'=>70,'uas'=>50,'tugas'=>68]; 
$nisa3 = ['id'=>3,'nama'=>'Rifki','nis'=>'011022430','uts'=>60,'uas'=>86,'tugas'=>70]; 
$nisa4 = ['id'=>4,'nama'=>'Raihan','nis'=>'011022734','uts'=>90,'uas'=>91,'tugas'=>82]; 

$ar_nilai = [$nisa1, $nisa2 , $nisa3, $nisa4]; 
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
<link href="assets/css/fresh-bootstrap-table.css" rel="stylesheet" />
<link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">
<hr />
<div class="fresh-table full-color-blue">
<h3>Daftar Nilai PAS Siswa SMA Yodam</h3>
<table id="fresh-table" class="table">
<thead>
    <th data-field="no">No</th>
    <th data-field="name">Nama</th>
    <th data-field="nis">NIS</th>
    <th data-field="country">UTS</th>
    <th data-field="nilai1">UAS</th>
    <th data-field="nilai2">Tugas</th>
    <th data-field="nilai3">Rata-rata</th>
</thead>
<tbody>
<?php
$nomor = 1;
foreach($ar_nilai as $nisa){
echo '<tr><td>'.$nomor.'</td>';
echo '<td>'.$nisa['nama'].'</td>';
echo '<td>'.$nisa['nis'].'</td>';
echo '<td>'.$nisa['uts'].'</td>';
echo '<td>'.$nisa['uas'].'</td>';
echo '<td>'.$nisa['tugas'].'</td>';
$average = ($nisa['uts'] + $nisa['uas']+$nisa['tugas'])/3;
echo '<td>'.number_format($average,2,',','.').'</td>';
echo '<tr/>';
$nomor++;
}
?>
</tbody>
</table>
</div>