<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM NILAI | GET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container card">
        <div class="row">
            <div class="col-12 bg-light pt-1 border-bottom">
                <p>Sistem Penilaian</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Form Nilai Mahasiswa</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <form>
                <div class="form-group row">
                    <label for="name" class="col-4 col-form-label">Nama  Lengkap</label> 
                    <div class="col-8">
                    <input id="name" name="name" placeholder="Nama Lengkap" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="Pemrograman Web">Pemrograman Web</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="UI/UX">UI/UX</option>
                        <option value="Basis Data">Basis Data</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <input id="nilai" name="nilai" placeholder="Nilai UTS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mark" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                    <input id="mark" name="mark" placeholder="NIlai UAS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="isaret" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                    <div class="col-8">
                    <input id="isaret" name="isaret" placeholder="Nilai Tugas" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="islem" type="submit" class="btn btn-secondary">Simpan</button>
                    </div>
                </div>
            </form>
            <?php
                $proses = isset($_GET['islem']) ? $_GET['islem'] : '';
                $nama = isset($_GET['name']) ? $_GET['name'] : '';
                $mata_kuliah = isset($_GET['matkul']) ? $_GET['matkul'] : '';
                $nilai_uts = isset($_GET['nilai']) ? $_GET['nilai'] : '';
                $nilai_uas = isset($_GET['mark']) ? $_GET['mark'] : '';
                $nilai_tugas = isset($_GET['isaret']) ? $_GET['isaret'] : '';

                echo 'Nama Mahasiswa:' .$nama;
                echo '<br/>Mata Kuliah:' .$mata_kuliah;
                echo '<br/>Nilai UTS:' .$nilai_uts;
                echo '<br/>Nilai UAS:' .$nilai_uts;
                echo '<br/>Nilai Tugas/Praktikum:' .$nilai_tugas;
            ?>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-12 bg-light border-top">
                <p>Develop By Fauzan Abdillah | Teknik Informatika</p>
            </div>
        </div>
    </div>
    
</body>
</html>