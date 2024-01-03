<?php

include 'koneksi.php';

if(isset($_POST['ubah'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama_lengkap'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    $jenjang_karir = $_POST['jenjang_karir'];
    $info_penting = $_POST['info_penting'];
    $tahun_lulus = $_POST['tahun_lulus'];
    $foto = $_POST['foto'];

    $sql = "UPDATE alumni SET nama_lengkap = '$nama', jurusan = '$jurusan', email = '$email', jenjang_karir = '$jenjang_karir', info_penting = '$info_penting', tahun_lulus = '$tahun_lulus', foto = '$foto' WHERE id = '$id'";
    $query = mysqli_query($koneksi,$sql);


    if(!$query) {
        echo "<script>alert('Data gagal diubah');</script>";
    }
    header('Location: home.php');

}

?>