<?php
session_start();
include ('koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
if (mysqli_num_rows($query) == 1){
    header("Location: ../app/index.php?page=dashboard");
    //echo 'Login Success';
    $user = mysqli_fetch_array($query);
    $_SESSION['nama']  = $user['nama'];
    $_SESSION['level'] = $user['level'];
}
else {
    header("Location: ../index.php?alert=1");
    //echo 'Login Failure';
}
?>