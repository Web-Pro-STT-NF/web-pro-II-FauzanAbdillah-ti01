<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM BELANJA | POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>Form Belanja Online</p>
                <hr>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-8">
            <form class="mb-4" method="post">
                <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Customer</label> 
                        <div class="col-8">
                        <input id="name" name="name" placeholder="Nama Customer" type="text" class="form-control">
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-4">Pilih Produk</label> 
                        <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                            <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                            <label for="produk_1" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Masin Cuci"> 
                            <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                        </div>
                        </div>
                </div>
                <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah Produk</label> 
                        <div class="col-8">
                        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control">
                        </div>
                </div> 
                <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                        </div>
                </div>
                </div>
                <div class="col-4">
                <div class="card " style="width: 18rem;">
                    <div class="card-header bg-primary">
                    Daftar Harga Produk
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" >TV  :  Rp 3.500.000</li>
                        <li class="list-group-item" >Kulkas  :  Rp 4.200.000</li>
                        <li class="list-group-item" >Mesin Cuci  :  Rp 7.350.000</li>
                        </ul>
                    <div class="card-footer bg-primary">
                    *Nb : Harga dapat berubah suatu waktu
                    </div>
                </div>
            </div>
            </form>
        </div>
        <br/>
        <br/>
        <br/>
        <hr/>
            <?php
                $kirim = isset($_POST['proses']) ? $_POST['proses'] : '';
                $nama = isset($_POST['name']) ? $_POST['name'] : '';
                $produk = isset($_POST['produk']) ? $_POST['produk'] : '';
                $jumlah_produk = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';

                echo 'Nama Customer:' .$nama;
                echo '<br/>Produk Yang Dipilih:' .$produk;
                echo '<br/>Jumlah Produk Yang Dibeli:' .$jumlah_produk;
            ?>
    </div>
</body>
</html>