<?php
include '../../config/koneksi.php';

$id        = $_GET['id'];
$nama      = $_GET['nama'];
$username  = $_GET['username'];
$password  = $_GET['password'];
$level     = $_GET['level'];


$query = mysqli_query($koneksi, "INSERT INTO user (id, nama, username, password, level) VALUES ('', '$nama', '$username', '$password', '$level')");
header ('Location: ../index.php?page=manajemen_akun&alert=1');
?>