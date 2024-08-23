<?php
include '../../config/koneksi.php';

$nama     = $_GET['nama'];
$semester = $_GET['semester'];
$prodi    = $_GET['prodi'];

$query = mysqli_query($koneksi, "INSERT INTO tb_mhs (id, nama, semester, prodi) VALUES ('', '$nama', '$semester', '$prodi')");
header ('Location: ../index.php?page=alternatif&alert=1');
?>