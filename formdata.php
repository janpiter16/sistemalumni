<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Form Pendataan Alumni</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include("save_data.php");
    }
    ?>
    <header class="navbar navbar-expand-lg navbar-primary bg-primary main-nav border-bottom border-2">
        <div class="container">
            <a class="navbar-brand" href="#">SMK N 1 Indramayu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto py-2">
                    <a class="nav-link active px-3" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link active px-3" href="tampilan.php">Tentang Alumni</a>
                    <a class="nav-link active px-3" href="formdata.php">Form Pengisian</a>
                </div>
            </div>
        </div>
    </header>

    <section class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6">
                <h2 class="text-center mb-3">Form Data Alumni</h2>
                <form name="tambahdataalumni" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                    method="post" enctype="multipart/form-data">
                    <div class="mb-2">
                        <label for="nis" class="col-sm-5 col-form-label">NISN</label>
                        <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan NISN Anda"
                            required>
                    </div>
                    <div class="mb-2">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                            placeholder="Masukkan Nama Lengkap Anda" required>
                    </div>
                    <div class="mb-2">
                        <label for="jurusan" class="col-sm-2-form-label">Jurusan</label>
                        <select id="jurusan" name="jurusan" class="form-select" required>
                            <option selected disabled hidden>Jurusan</option>
                            <option>Akuntansi</option>
                            <option>Animasi</option>
                            <option>Perkantoran</option>
                            <option>Perhotelan</option>
                            <option>Tataboga</option>
                            <option>Multimedia</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda"
                            required>
                    </div>
                    <div class="mb-2">
                        <label for="jenjang_karir" class="form-label">Jenjang Karir</label>
                        <select id="jenjang_karir" name="jenjang_karir" class="form-select" required>
                            <option selected disabled hidden>Pilih Salah Satu</option>
                            <option>Bekerja</option>
                            <option>Pendidikan Lebih Lanjut</option>
                            <option>Wirausaha</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="lebih_lanjut" class="col-sm-5 col-form-label">Lainnya</label>
                        <input type="text" class="form-control" id="lebih_lanjut" name="lebih_lanjut"
                            placeholder="Lainnya">
                    </div>
                    <div class="mb-3">
                        <label for="thn_lulus" class="form-label">Tahun Lulus</label>
                        <input type="text" class="form-control" id="thn_lulus" name="thn_lulus"
                            placeholder="Masukkan Tahun Lulus Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat / Tempat Tinggal</label>
                        <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Anda"
                            required></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label>Jenis Kelamin</label><br>
                        <div class="form-check-inline">
                            <input type="radio" class="form-check-input" name="jenis_kelamin" id="radio_laki"
                                value="Laki-laki" checked>
                            <label for="radio_laki">Laki-laki</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="radio" class="form-check-input" name="jenis_kelamin" id="radio_perempuan"
                                value="Perempuan">
                            <label for="radio_perempuan">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <br>
                        <label>Upload Foto</label>
                        <br>
                        <input type="file" class="form-control-file" name="foto" required>
                        <small>Maksimal 10 Mb </small>
                    </div><br>
                    <button type="submit" onclick="myFunction" class="btn btn-primary">Kirim</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">

            var myAlert = document.getElementById('myAlert');

            myAlert.style.display = "none"

            function myFunction() {
                myAlert.style.display = 'block'
            }
        </script>
</body>

</html>