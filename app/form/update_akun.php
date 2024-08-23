<?php
include '../../config/koneksi.php';

if (isset($_POST['simpan'])) {
    if (isset($_POST['id'])) {
        $id        = $_POST['id'];
        $nama      = $_POST['nama'];
        $username  = $_POST['username'];
        $password  = $_POST['password'];
        $level     = $_POST['level'];

    $query = mysqli_query($koneksi, "UPDATE user SET nama='$nama', username='$username', password='$password', level='$level' WHERE id='$id'")
       or die('Ada kesalahan pada query update : '.mysqli_error($koneksi));

header ('Location: ../index.php?page=manajemen_akun&alert=2');
    }
}
?>