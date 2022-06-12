<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Mata Kuliah</title>
</head>
<body>
    <div class="col-md-12">
        <h3 class="text-center">Mata Kuliah</h3>
        <table class='table'>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>SKS</th>
                    <th>KODE</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor=1;
                foreach($list_mtkl as $mtkl){
                ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$mtkl->nama?></td>
                    <td><?=$mtkl->sks?></td>
                    <td><?=$mtkl->kode?></td>
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