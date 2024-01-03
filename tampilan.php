<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Alumni Sekolah</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <header class="navbar sticky-top navbar-expand-lg navbar-light main-nav border-bottom border-2">
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
                    <a class="nav-link active px-3" href="dataalumni.php">Data Alumni</a>
                </div>
            </div>
        </div>
    </header>
    <h4 class= "text-center justify-content">Alumni SMK N 1 Indramayu</h4>
        <div class="row">
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyek";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM alumni";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo 
    '
    <div class="col-4">
    <div class="card" style="width: 20rem;">
        <img src="imgalumni/' . $row["foto"] . '" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">' . $row["nama_lengkap"] . '</h5>
            <p class="card-text">Jurusan: ' . $row["jurusan"] . '</p>
            <p class="card-text">Email: ' . $row["email"] . '</p>
            <p class="card-text">Jenjang Karir: ' . $row["jenjang_karir"] . '</p>
            <p class="card-text">Info Penting: ' . $row["info_penting"] . '</p>
        </div>
    </div>
    </div>';
  }
} else {
  echo "0 results";
}
$conn->close();
?>
        </div>
    </div>



</body>
