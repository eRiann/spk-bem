<?php
include '../../config/koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM penilaian WHERE id = '$id'";
$result = $koneksi->query($query);

//echo "<script>
//window.location.href='../index.php?page=penilaian';
//alert('Nilai Berhasil di Hapus!');
//</script>";

header ('Location: ../index.php?page=penilaian&alert=1');
?>