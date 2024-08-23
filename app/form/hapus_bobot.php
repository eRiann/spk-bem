<?php
include '../../config/koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM pembobotan WHERE id = '$id'";
$result = $koneksi->query($query);

//echo "<script>
//window.location.href='../index.php?page=pembobotan';
//alert('Bobot Berhasil di Hapus!');
//</script>";

header ('Location: ../index.php?page=pembobotan&alert=2');
?>