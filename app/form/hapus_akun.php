<?php
include '../../config/koneksi.php';

$data = $_GET['id'];
$query = "DELETE FROM user WHERE id = '$data'";
$result = $koneksi->query($query);

header ('Location: ../index.php?page=manajemen_akun&alert=8');
?>