<?php

include 'koneksi.php';

if(isset($_POST['ubah'])) {
    $id = $_POST['id'];
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $karir = $_POST['karir'];
    $tahun_lulus = $_POST['tahun_lulus'];
    $no_telepon = $_POST['no_telepon'];

    $sql = "UPDATE data_user SET  nisn = '$nisn', nama = '$nama', jurusan = '$jurusan', karir = '$karir', tahun_lulus = '$tahun_lulus', no_telepon = '$no_telepon' WHERE id = '$id'";
    $query = mysqli_query($koneksi,$sql);


    if(!$query) {
        echo "<script>alert('Data gagal diubah');</script>";
    }
    header('Location: home.php');

}

?>