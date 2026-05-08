<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="sidebar">

    <div class="logo">
        SIAKAD
    </div>

    <div class="menu">
        <a href="menu.php">Dashboard</a>
        <a href="tambah_data.php">Tambah Data</a>
    </div>

</div>

<div class="topbar">
    <h3>Tambah Data</h3>
</div>

<div class="content">

    <div class="card-custom">

        <form method="POST" action="tambah_proses.php">

            <label>Nama</label>
            <input type="text" name="nama" class="form-control">

            <label>NIS</label>
            <input type="text" name="nis" class="form-control">

            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control">

            <label>Nilai</label>
            <input type="number" name="nilai" class="form-control">

            <button class="btn btn-success">
                Simpan
            </button>

        </form>

    </div>

</div>

</body>
</html>