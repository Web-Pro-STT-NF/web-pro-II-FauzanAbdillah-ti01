<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Daftar Mahasiswa</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">IPK</th>
      <th scope="col">Predikat</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $no = 1;
        foreach($list_mhs as $mhs):
    ?>
    <tr>
      <th scope="row"><?=$no?></th>
      <td><?= $mhs->nim?></td>
      <td><?= $mhs->nama?></td>
      <td><?= $mhs->ipk?></td>
      <td><?= $mhs->predikat()?></td>

    </tr>
  </tbody>
  <?php
  $no++;
    endforeach;

  ?>
</table>
    
</body>
</html>