<?php
include '../../config/koneksi.php';

$id       = $_GET['id'];
$nama     = $_GET['nama'];
$semester = $_GET['semester'];
$prodi    = $_GET['prodi'];

$query = mysqli_query($koneksi, "UPDATE tb_mhs SET nama='$nama', semester='$semester', prodi='$prodi' WHERE id='$id'");
header ('Location: ../index.php?page=alternatif&alert=2');
?>