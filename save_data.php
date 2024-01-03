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
    $nama_lengkap = $_POST['nama_lengkap'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    $jenjang_karir = $_POST['jenjang_karir'];
    $lainnya = $_POST['lainnya'];
    $info_penting = $_POST['info_penting'];
    $tahun_lulus = $_POST['tahun_lulus'];

    // Mengatur lokasi penyimpanan file foto
    $foto = "C:/Users/ASUS/Desktop/uploads/" . basename($_FILES["foto"]["name"]);

    // Upload foto ke folder "uploads"
    move_uploaded_file($_FILES["foto"]["name"], $foto);

    // Menyimpan data ke dalam tabel alumni
    $sql = "INSERT INTO alumni (nama_lengkap, jurusan, email, jenjang_karir, lainnya, info_penting tahun_lulus, foto)
            VALUES ('$nama_lengkap', '$jurusan', '$email', '$jenjang_karir', '$lainnya', '$info_penting' '$tahun_lulus', '$foto')";

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