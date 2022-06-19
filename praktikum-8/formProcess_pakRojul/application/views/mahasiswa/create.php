<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css')?>">
  <title>Document</title>
</head>
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Kelola Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Mahasiswa</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <?php echo form_open('Mahasiswa/save');?>
            <div class="form-group row">
              <label for="nim" class="col-4 col-form-label">NIM</label> 
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-address-card"></i>
                    </div>
                  </div> 
                  <input id="nim" name="nim" type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-4 col-form-label">Nama</label> 
              <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-4">Jenis Kelamin</label> 
              <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-laki"> 
                  <label for="jk_0" class="custom-control-label">Laki-laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan"> 
                  <label for="jk_1" class="custom-control-label">Perempuan</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
              <div class="col-8">
                <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
              <div class="col-8">
                <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
              <div class="col-8">
                <select id="prodi" name="prodi" class="custom-select">
                  <option value="Teknik Informatika">Teknik Informatika</option>
                  <option value="Sistem Informasi">Sistem Informasi</option>
                  <option value="Bisnis Digital">Binis Digital</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="ipk" class="col-4 col-form-label">IPK</label> 
              <div class="col-8">
                <input id="ipk" name="ipk" type="text" class="form-control">
              </div>
            </div> 
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          <?php echo form_close();?>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          STT-Nurul Fikri T.A 2021/2022
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
</body>
</html>