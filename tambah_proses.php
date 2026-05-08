<?php
include "koneksi.php";

mysqli_query($koneksi, "INSERT INTO siswa VALUES (
    '',
    '$_POST[nama]',
    '$_POST[nis]',
    '$_POST[kelas]',
    '$_POST[nilai]'
)");

header("Location: menu.php");
?>