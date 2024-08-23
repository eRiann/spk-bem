<?php
include '../../config/koneksi.php';

$id       = $_GET['id'];
//$nama     = $_GET['nama'];
//$nim      = $_GET['nim'];
//$semester = $_GET['semester'];
//$prodi    = $_GET['prodi'];

$query = mysqli_query($koneksi, "DELETE FROM tb_mhs WHERE id='$id'");
header ('Location: ../index.php?page=alternatif&alert=3');
?>