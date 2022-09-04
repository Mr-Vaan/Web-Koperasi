<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "koneksi";

$conn = mysqli_connect($server, $user, $password, $nama_database);

if ( !$conn) {
    die("Gagal Terhubung dengan Database: " . mysqli_connect_error());
}
?>
