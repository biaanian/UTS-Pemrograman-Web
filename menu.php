<?php
session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
}

include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard | AKADEMIK</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body{
        margin:0;
        font-family:'Segoe UI', sans-serif;
        background:#f4f6f9;
    }

    /* SIDEBAR */
    .sidebar{
        position:fixed;
        width:270px;
        height:100%;
        background:linear-gradient(180deg,#0d3b66,#1d4e89);
        color:white;
    }

    .logo{
        padding:25px;
        font-size:32px;
        font-weight:bold;
        display:flex;
        align-items:center;
        gap:7px;
        border-bottom:1px solid rgba(255,255,255,0.1);
    }

    .logo img{
        width:45px;
    }

    .menu{
        margin-top:20px;
    }

    .menu a{
        display:block;
        color:white;
        padding:15px 25px;
        text-decoration:none;
        transition:0.3s;
    }

    .menu a:hover{
        background:rgba(255,255,255,0.1);
    }

    /* TOPBAR */
    .topbar{
        margin-left:260px;
        height:70px;
        background:white;
        display:flex;
        justify-content:space-between;
        align-items:center;
        padding:0 30px;
        border-bottom:1px solid #ddd;
    }

    /* CONTENT */
    .content{
        margin-left:260px;
        padding:30px;
    }

    /* CARD */
    .card-custom{
        background:white;
        border-radius:10px;
        padding:25px;
        box-shadow:0 2px 10px rgba(0,0,0,0.05);
    }

    /* INFO CARD */
    .info-box{
        background:white;
        padding:20px;
        border-radius:10px;
        text-align:center;
        box-shadow:0 2px 10px rgba(0,0,0,0.05);
    }

    .info-box h2{
        color:#1d4e89;
        font-weight:bold;
    }

    /* TABLE */
    .table th{
        background:#1d4e89;
        color:white;
    }

    /* BUTTON */
    .btn-primary{
        background:#1d4e89;
        border:none;
    }

    .btn-warning{
        color:white;
    }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">

    <div class="logo">

        <img src="akademik.png">

        AKADEMIK

    </div>

    <div class="menu">

        <a href="menu.php">
            Dashboard
        </a>

        <a href="tambah_data.php">
            Tambah Data
        </a>

        <a href="logout.php">
            Logout
        </a>

    </div>

</div>

<!-- TOPBAR -->
<div class="topbar">

    <h4>Dashboard</h4>

    <div>
        👤 <?= $_SESSION['username']; ?>
    </div>

</div>

<!-- CONTENT -->
<div class="content">

    <!-- INFO -->
    <div class="row mb-4">

        <div class="col-md-4">
            <div class="info-box">
                <h2>
                    <?php
                    $jml=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM siswa"));
                    echo $jml;
                    ?>
                </h2>

                <p>Total Siswa</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="info-box">
                <h2>8</h2>
                <p>Kelas</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="info-box">
                <h2>85</h2>
                <p>Rata-rata Nilai</p>
            </div>
        </div>

    </div>

    <!-- TABLE -->
    <div class="card-custom">

        <div class="d-flex justify-content-between mb-3">

            <h4>Data Nilai Siswa</h4>

            <a href="tambah_data.php" class="btn btn-primary">
                + Tambah Data
            </a>

        </div>

        <table class="table table-bordered table-hover">

            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>Nilai</th>
                <th width="180">Aksi</th>
            </tr>

            <?php
            $no=1;

            $data=mysqli_query($koneksi,"SELECT * FROM siswa");

            while($d=mysqli_fetch_array($data)){
            ?>

            <tr>

                <td><?= $no++; ?></td>

                <td><?= $d['nama']; ?></td>

                <td><?= $d['nis']; ?></td>

                <td><?= $d['kelas']; ?></td>

                <td><?= $d['nilai']; ?></td>

                <td>

                    <a href="edit_data.php?id=<?= $d['id']; ?>"
                       class="btn btn-warning btn-sm">

                        Edit

                    </a>

                    <a href="hapus.php?id=<?= $d['id']; ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin hapus data?')">

                        Hapus

                    </a>

                </td>

            </tr>

            <?php } ?>

        </table>

    </div>

</div>

</body>
</html>