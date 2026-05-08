<?php
include "koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card">
        <div class="card-header bg-warning">
            Edit Data Siswa
        </div>

        <div class="card-body">

            <form method="POST" action="edit_proses.php">

                <input type="hidden" name="id" value="<?= $d['id'] ?>">

                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" value="<?= $d['nama'] ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label>NIS</label>
                    <input type="text" name="nis" value="<?= $d['nis'] ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Kelas</label>
                    <input type="text" name="kelas" value="<?= $d['kelas'] ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Nilai</label>
                    <input type="number" name="nilai" value="<?= $d['nilai'] ?>" class="form-control">
                </div>

                <button class="btn btn-warning">Update</button>
                <a href="menu.php" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>

</div>

</body>
</html>