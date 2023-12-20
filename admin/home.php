<?php

include'koneksi.php';

if(isset($_POST['Simpan'])) {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $karir = $_POST['karir'];
    $tahun_lulus = $_POST['tahun_lulus'];
    $no_telepon = $_POST['no_telepon'];

    $sql = "INSERT INTO data_user VALUES ('', '$nisn', '$nama', '$jurusan', '$karir', '$tahun_lulus', '$no_telepon')";
    $query = mysqli_query($koneksi,$sql);

    if($query) {
        header('location PHP_SELF');
    } else {
        echo "<script>aler('Data gagal disimpan');</script>";
    }
}
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMK NEGERI 1 INDRAMAYU</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="index_hotel.php" class="navbar-brand">
        <span class="brand-text font-weight-light">SMK NEGERI 1 INDRAMAYU</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="home.php" class="nav-link">Data Alumni</a>
          </li>
          <li class="nav-item">
            <a href="fasilitas_kamar.php" class="nav-link">Data User</a>
          </li>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link">Logout</a>
          </li>
      </div>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <h1>Data Alumni</h1>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- main content -->
    <div class="content">
        <div class="container">
            <!-- tabel kamar -->
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahData">
                        Tambahkan Data +
                    </button>
                    </div>
                    <!--form tambah data-->
                    <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Alumni</h1>
                                    <button type="button" classs="btn-close" data-dismiss="modal" aria-label="close"></button>
                                </div>

                                <!--form tambah kamar-->
                                <form action="" method="POST">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">NISN: </label>
                                            <input type="text" name="nisn" min="0" class="form-control" placeholder="Masukkan Tipe Kamar" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama: </label>
                                            <input type="text" name="nama" min="0" class="form-control" placeholder="Masukkan Jumlah Kamar" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jurusan: </label>
                                            <input type="text" name="jurusan" min="0" class="form-control" placeholder="Masukkan Tipe Kamar" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Karir: </label>
                                            <input type="text" name="karir" min="0" class="form-control" placeholder="Masukkan Jumlah Kamar" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tahun Lulus: </label>
                                            <input type="text" name="tahun_lulus" min="0" class="form-control" placeholder="Masukkan Tipe Kamar" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">No Telepon: </label>
                                            <input type="text" name="no_telepon" min="0" class="form-control" placeholder="Masukkan Jumlah Kamar" required>
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" name="Simpan" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">NISN</th>
                                        <th scope="col">Nama </th>
                                        <th scope="col">Jurusan</th>
                                        <th scope="col">Karir</th>
                                        <th scope="col">Tahun Lulus</th>
                                        <th scope="col">No Telepon</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                            <tbody>
</div>
<?php
//tampil from tabel_kamar
$no = 1;
$sql = "SELECT * FROM data_user";
$query = mysqli_query($koneksi,$sql);

if($query) {
    while($row = mysqli_fetch_assoc($query)) {
        ?>

        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nisn'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['jurusan'] ?></td>
            <td><?= $row['karir'] ?></td>
            <td><?= $row['tahun_lulus'] ?></td>
            <td><?= $row['no_telepon'] ?></td>
            <td> 
              
            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ubahData<?= $row['id'] ?>" href="#">
                Ubah</a>
                <a class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#viewData<?= $row['id'] ?>" href="#">
                Lihat</a>
                <a href="hapus_data_kamar.php?id=<?= $row['id'] ?>">
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus
                      </button>
                  </a>
    </a>
    </td>
    </tr>
    
<!--form ubah data-->
<div class="modal fade" id="ubahData<?= $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data Alumni</h1>
                                    <button type="button" classs="btn-close" data-dismiss="modal" aria-label="close"></button>
                                </div>

                                <!--form ubah kamar-->
                                <form action="update_kamar.php" method="POST">
                                  <input type ="hidden" name="id" value="<?= $row['id'] ?>">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">NISN: </label>
                                            <input type="text" name="nisn" class="form-control" placeholder="Masukkan Tipe Kamar" required value="<?= $row['nisn'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama: </label>
                                            <input type="text" name="nama" min="0" class="form-control" placeholder="Masukkan Jumlah Kamar" required value="<?= $row['nama'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jurusan</label>
                                            <input type="text" name="jurusan" class="form-control" placeholder="Masukkan Tipe Kamar" required value="<?= $row['jurusan'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Karir: </label>
                                            <input type="text" name="karir" min="0" class="form-control" placeholder="Masukkan Jumlah Kamar" required value="<?= $row['karir'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tahun Lulus:</label>
                                            <input type="text" name="tahun_lulus" class="form-control" placeholder="Masukkan Tipe Kamar" required value="<?= $row['tahun_lulus'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">No Telepon</label>
                                            <input type="text" name="no_telepon" min="0" class="form-control" placeholder="Masukkan Jumlah Kamar" required value="<?= $row['no_telepon'] ?>">
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="ubah" name="ubah" class="btn btn-primary">Ubah</button>
                                        </div>
                                    </form>

                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="viewData<?= $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Lihat Data Alumni</h1>
                                    <button type="button" classs="btn-close" data-dismiss="modal" aria-label="close"></button>
                                </div>

                                <div class="modal-body">
                                  <p>NISN : <?= $row['nisn'] ?></p>
                                  <p>Nama : <?= $row['nama'] ?></p>
                                  <p>Jurusan : <?= $row['jurusan'] ?></p>
                                  <p>Karir : <?= $row['karir'] ?></p>
                                  <p>Tahun Lulus : <?= $row['tahun_lulus'] ?></p>
                                  <p>No Telepon : <?= $row['no_telepon'] ?></p>
                                </div>
    
                              </div>
                            </div>
                          </div>
                            
</div>

    <?php
    }
}
?>
</tbody>
</table>
</div>
</div>

        <!-- /.row -->
</div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <!-- <div class="float-right d-none d-sm-inline">
      Anything you want
    </div> -->
    <!-- Default to the left -->
    <!-- <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved. -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
</body>
</html>