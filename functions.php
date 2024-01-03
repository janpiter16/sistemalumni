<?php

$koneksi = mysqli_connect("localhost","root","","proyek");
if (!$koneksi){
  echo "anda Gagal Koneksi ke database";
}
function  tambah($data) {
  global $koneksi;

    $nama_lengkap = isset($data["nama_lengkap"]) ? htmlspecialchars($data["nama_lengkap"]) : '';
    $jurusan = isset($data["jurusan"]) ? htmlspecialchars($data["jurusan"]) : '';
    $email = isset($data["email"]) ? htmlspecialchars($data["email"]) : '';
    $jenjang_karir = isset($data["jenjang_karir"]) ? htmlspecialchars($data["jenjang_karir"]) : '';
    $info_penting = isset($data["info_penting"]) ? htmlspecialchars($data["info_penting"]) : '';
    $tahun_lulus = isset($data["tahun_lulus"]) ? htmlspecialchars($data["tahun_lulus"]) : '';
    $gambar = upload();
  if(!$gambar){
      return false;
  }
  $query = "INSERT INTO alumni (nama_lengkap, jurusan, email, jenjang_karir, info_penting, tahun_lulus, foto) VALUES ('$nama_lengkap', '$jurusan', '$email', '$jenjang_karir', '$info_penting', '$tahun_lulus', '$gambar')";

  mysqli_query($koneksi, $query);

  return mysqli_affected_rows($koneksi);
}

function upload(){

  $namafile = $_FILES['gambar']['name'];
  $ukuranfile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  // if($error === 4 ){
  //     echo "<script>
  //             alert('pilih gambar terlebih dahulu');
  //             </script>";
  //         return false;
  // }
  $ekstensiGambarValid = ['jpg', 'png', 'jpeg',];
  $ekstensiGambar = explode('.', $namafile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
      // echo "<script>
      // alert('yang anda upload bukan gambar');
      // </script>";
  }
  if( $ukuranfile > 2000000){
      echo "<script>
      alert('Ukuruan gambar terlalu besar');
      </script>";
  }

  $namafilebaru = uniqid();
  $namafilebaru .= '.';
  $namafilebaru .= $ekstensiGambar;
  var_dump($namafilebaru);

  move_uploaded_file($tmpName, 'imgalumni/'.$namafilebaru);
  return $namafilebaru;

}

?>