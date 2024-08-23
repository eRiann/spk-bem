<?php

$server   = "localhost";
$username = "root";
$password = "";
$database = "db_bem";

$koneksi = mysqli_connect($server, $username, $password, $database);

if ($koneksi->connect_error){
    die('Koneksi Database Gagal : '.$koneksi->connect_error);
}

?>