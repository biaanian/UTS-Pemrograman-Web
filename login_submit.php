<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['pass']); 

$query = "SELECT * FROM user WHERE username='$username'";
$hasil = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($hasil);

if ($data && $password == $data['password']) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['hakakses'] = $data['hakakses'];

    header("Location: menu.php");
} else {
    echo "<h3>Login gagal!</h3>";
}
?>