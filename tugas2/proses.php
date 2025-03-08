<?php
// Include file yang berisi class Mahasiswa
require_once 'Mahasiswa.php';

// Ambil data dari URL
$nama = htmlspecialchars($_GET['nama']);
$nim = htmlspecialchars($_GET['nim']);

// Buat objek dari class Mahasiswa
$mahasiswa = new Mahasiswa();

// Set data menggunakan method setData
$mahasiswa->setData($nim, $nama);

// Ambil data untuk ditampilkan
$data = $mahasiswa->tampilkanData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h3 class="card-title">Hasil Input</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Hello, <br>  <strong>Nama:</strong> <?php echo $data['nama']; ?></p>
                        <p class="card-text"><strong>NIM:</strong> <?php echo $data['nim']; ?></p>
                        <a href="form.php" class="btn btn-primary">Kembali ke Form</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>