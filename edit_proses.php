<?php
include "koneksi.php";

mysqli_query($koneksi, "UPDATE siswa SET
    nama='$_POST[nama]',
    nis='$_POST[nis]',
    kelas='$_POST[kelas]',
    nilai='$_POST[nilai]'
WHERE id='$_POST[id]'");

header("Location: menu.php");
?>