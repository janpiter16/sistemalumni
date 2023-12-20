<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sesuaikan dengan informasi koneksi database Anda
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "proyek";

    // Membuat koneksi ke database
    $conn = new mysqli($servername, $username, $password, $database);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Mengambil data dari formulir
    $nisn = $_POST['nis'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    $jenjang_karir = $_POST['jenjang_karir'];
    $lainnya = $_POST['lebih_lanjut'];
    $thn_lulus = $_POST['thn_lulus'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    // Mengatur lokasi penyimpanan file foto
    $foto_path = "C:/Users/ASUS/Desktop/uploads/" . basename($_FILES["foto"]["tmp_name"]);

    // Upload foto ke folder "uploads"
    move_uploaded_file($_FILES["foto"]["tmp_name"], $foto_path);

    // Menyimpan data ke dalam tabel alumni
    $sql = "INSERT INTO data_alumni (nisn, nama_lengkap, jurusan, email, jenjang_karir, lainnya, tahun_lulus, alamat, jenis_kelamin, foto_path)
            VALUES ('$nisn', '$nama_lengkap', '$jurusan', '$email', '$jenjang_karir', '$lainnya', '$thn_lulus', '$alamat', '$jenis_kelamin', '$foto_path')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Data Berhasil Dikirim');
            </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // // Menutup koneksi
    // $conn->close();
}
?>