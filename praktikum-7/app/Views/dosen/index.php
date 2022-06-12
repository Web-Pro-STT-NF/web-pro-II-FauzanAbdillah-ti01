<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dosen</title>
</head>
<body>
    <div class="col-10">
        <h3 class="text-center">Daftar Dosen</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>NIDN</th>
                    <th>Gender</th>
                    <th>Tempat Lahir</th>
                    <th>tanggal Lahir</th>
                    <th>Pendidikan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor=1;
                foreach($list_dsn as $dsn){
                ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$dsn->nama?></td>
                    <td><?=$dsn->nidn?></td>
                    <td><?=$dsn->gender?></td>
                    <td><?=$dsn->tmp_lahir?></td>
                    <td><?=$dsn->tgl_lahir?></td>
                    <td><?=$dsn->pendidikan?></td>
                </tr>
                <?php
                $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>