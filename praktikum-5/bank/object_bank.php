<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Customer</title>
</head>
<body>
    <?php
    require_once "account_bank.php";
    $cs1 = new AccountBank('0001','Malik', 2000000);
    $cs2 = new AccountBank('0002','Garin', 3500000);
    $cs3 = new AccountBank('0003','Naufal', 1750000);

    $dataCs = [$cs1,$cs2,$cs3];
$cs1->transfer($cs3, 250000);
$cs2->transfer($cs3, 300000);
$cs3->deposit(350000);
?>
<table class="table table-striped">
    <thead>
    <tr>
            <th scope="col" data-field="no">No</th>
            <th data-field="nim">Kode</th>
            <th data-field="nama">Nama Customer</th>
            <th data-field="prodi">Saldo</th>
    </tr>
    </thead>
    <tbody>
        <?php
        $nomor=1;
        foreach($dataCs as $fcs){
            echo '<tr><td>'.$nomor.'</td>';
            echo '<td>'.$fcs->nomor.'</td>';
            echo '<td>'.$fcs->customer.'</td>';
            echo '<td>'.$fcs->saldo.'</td>';
            echo '<tr/>';
            $nomor++;
        }
        ?>
    </tbody>
</table>
    
</body>
</html>