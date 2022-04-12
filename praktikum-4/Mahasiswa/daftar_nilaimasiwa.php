<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">WEB02</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link dropdown-toggle" aria-current="page" href="#">Review PHP</a>
                </li>
                <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="#">PHP5 OOP</a>
                </li>
                <li><form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">Submit</button>
                </form>
                </li>
            </ul>
            <a class="nav-link"href="#">Login</a>
            <a class="nav-link dropdown-toggle"href="#">Dropdown</a>
            </div>
        </div>
        </nav>
<!-- Navbar -->
<br>
<br>
        <div class="row ml-4">
            <div class="col-12">
                <p><b>Form Nilai Mahasiswa</b></p>
                <hr>
            </div>
        </div>
        <div class="row ml-4">
            <div class="col-6">
            <form method="GET"> 
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                <input id="nim" name="nim" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="select" class="col-4 col-form-label">Pilih Matkul</label> 
                <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select">
                    <option value="Basis Data">Basis Data</option>
                    <option value="Pemrograman Web">Pemrograman Web</option>
                    <option value="Jaringan Komputer">Jaringan Komputer</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="text1" class="col-4 col-form-label">Nilai</label> 
                <div class="col-8">
                <input id="nilai" name="nilai" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="proses" class="btn btn-success">Simpan</button>
                </div>
            </div>
            </form>
</div>
</div>
            <div class="row mt-3">
                <hr>
            </div>
            <div class='row ml-4'>
                <?php
                require_once "class_nilaimasiswa.php";
                $proses = isset($_GET['proses']) ? $_GET['proses'] : '';
                $nim = isset($_GET['nim']) ? $_GET['nim'] :'';
                $matkul = isset($_GET['matkul']) ? $_GET['matkul'] : '';
                $nilai = isset($_GET['nilai']) ? $_GET['nilai'] : '';
                

                echo "NIM = ".$nim;
                echo "<br>Mata Kuliah = ".$matkul;
                echo "<br>Nilai = ".$nilai;


                $hasil_ujian = new NilaiMahasiswa($nilai);
                echo "<br/>Hasil Ujian = ".$hasil_ujian->grade();

                $grade = new NilaiMahasiswa($nilai);
                echo "<br>Grade = ".$grade->hasil();
                
                
                
                ?>
            </div>
            <hr>
            <div class="row">
            <div class="col-12 bg-light border-top">
                <p><b>Lab Pemrograman Web Lanjutan</b></p>
                <p>Dosen : Sirojul Munir S.Si,M.Kom</p>
                <p>STT-NF - Kampus B</p>
            </div>
        </div>
    
</body>
</html>