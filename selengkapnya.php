<?php
// Di sini Anda dapat menambahkan koneksi ke database atau logika untuk mengambil data

// Contoh data sementara
$data = [
    ['Nama' => 'John Doe', 'Usia' => 25, 'Alamat' => 'Jalan Contoh 123'],
    ['Nama' => 'Jane Smith', 'Usia' => 30, 'Alamat' => 'Jalan Contoh 456'],
    // Tambahkan data lain sesuai kebutuhan
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Viewer - Lihat Keseluruhan Data</title>
</head>

<body>

    <h1>Lihat Keseluruhan Data</h1>

    <table border="1">
        <thead>
            <tr>
                <?php foreach (array_keys($data[0]) as $column): ?>
                    <th>
                        <?php echo $column; ?>
                    </th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row): ?>
                <tr>
                    <?php foreach ($row as $value): ?>
                        <td>
                            <?php echo $value; ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p><a href="index.php">Kembali</a></p>

</body>

</html>