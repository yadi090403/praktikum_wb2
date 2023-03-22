<?php

require_once 'header.php';
require_once 'sideber.php';

?>,



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><a href="praktikum1.php">DAFTAR NILAI</a></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"></h3>

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
                            <!doctype html>
                            <html lang="en">

                            <head>
                                <!-- Required meta tags -->
                                <meta charset="utf-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1">

                                <!-- Bootstrap CSS -->
                                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                                <link rel="stylesheet" href="isi.css">
                                <title>Hello, world!</title>
                            </head>

                            <body>
                                <div class="container">
                                    <h1>form nilai siswa</h1>
                                    <form action="isifrom.php" method="POST">
                                        <div class="form-group row">
                                            <label for="nama" class="col-4 col-form-label">nama lengkap</label>
                                            <div class="col-8">
                                                <input id="nama" name="nama" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="matkul" class="col-4 col-form-label">mata kuliah</label>
                                            <div class="col-8">
                                                <select id="matkul" name="matkul" class="custom-select">
                                                    <option value="WEB">programan web</option>
                                                    <option value="DDP">dasar dasar pemprograman</option>
                                                    <option value="SO">sistem oprasi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                                            <div class="col-8">
                                                <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                                            <div class="col-8">
                                                <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label>
                                            <div class="col-8">
                                                <input id="nilai_tugas" name="nilai_tugas" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-4 col-8">
                                                <button name="batal" type="submit" class="btn btn-danger">batal</button>
                                                <button name="kirim" type="submit" class="btn btn-primary">kirim</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                                <!-- Optional JavaScript; choose one of the two! -->

                                <!-- Option 1: Bootstrap Bundle with Popper -->
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

                                <!-- Option 2: Separate Popper and Bootstrap JS -->
                                <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
                            </body>

                            </html>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php

require_once 'footer.php';
?>,