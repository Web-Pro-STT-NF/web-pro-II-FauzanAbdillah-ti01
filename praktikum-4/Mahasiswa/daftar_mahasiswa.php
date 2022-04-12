<!DOCTYPE html>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR MAHASISWA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/fresh-bootstrap-table.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
</html>
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
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </form>
                </li>
            </ul>
            <a class="nav-link"href="#">Login</a>
            <a class="nav-link dropdown-toggle"href="#">Dropdown</a>
            </div>
        </div>
        </nav>
<!-- Navbar -->
    <div class="row mt-4">
        <div class="col-4">
            <span><b>Show</b></span>
            <div class="btn-group">
                <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">10</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">1</a></li>
                    <li><a class="dropdown-item" href="#">2</a></li>
                    <li><a class="dropdown-item" href="#">3</a></li>
                    <li><a class="dropdown-item" href="#">4</a></li>
                    <li><a class="dropdown-item" href="#">5</a></li>
                    <li><a class="dropdown-item" href="#">6</a></li>
                    <li><a class="dropdown-item" href="#">7</a></li>
                    <li><a class="dropdown-item" href="#">8</a></li>
                    <li><a class="dropdown-item" href="#">9</a></li>
                    <li><a class="dropdown-item" href="#">10</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
                </div>
                    <span><b>entries</b></span>
                </div>
                <div class="col-8 d-flex justify-content-end">
                    <label for="" class=""><b>Search : </b></label>
                    <input type="text" class="ms-1">
                </div>
            </div>
            <div class="row">
                <?php
                require_once "class_mahasiswa.php";

                $mawa1 = new Mahasiswa("0110220192", "Jay Marquez",2021 ,"Teknik Informatika" , 3.9, "Cum Laude");
                $mawa2 = new Mahasiswa("0492839383", "Choi Hyun Sik", 2021,"Teknik Informatika" , 3.5, "Memuaskan");
                $mawa3 = new Mahasiswa("0321972832", "Faiz Abdul", 2021,"Teknik Informatika" , 3.7, "Memuaskan");
                $mawa4 = new Mahasiswa("0928272912", "Tang Thanappon", 2021, "Teknik Informatika", 3.2, "Memuaskan");

                $array_nilai = [$mawa1, $mawa2, $mawa3, $mawa4];
                ?>
                <div class="container-fluid">
    <table id="fresh-table" class="table">
        <thead>
            <tr>
            <th scope="col" data-field="no">No</th>
            <th data-field="nim">NIM</th>
            <th data-field="nama">Nama</th>
            <th data-field="prodi">Prodi</th>
            <th data-field="tahun">Thn Angkatan</th>
            <th data-field="ipk">IPK</th>
            <th data-field="predikat">Predikat</th>
            <th data-field="null">....</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach($array_nilai as $mawa){
                echo '<td><td?>' .$nomor. '</td>';
            echo '<td>'.$mawa->nim. '</td>';
            echo '<td>'.$mawa->nama.'</td>';
            echo '<td>'.$mawa->prodi.'</td>';
            echo '<td>'.$mawa->thn_angkatan.'</td>';
            echo '<td>'.$mawa->ipk.'</td>';
            echo '<td>'.$mawa->predikat_ipk().'</td>';
            echo '<tr/>';
            $nomor++;
        
        }

            ?>
        </tbody>
</body>
</html>