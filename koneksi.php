<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "praktek";

$koneksi = new mysqli($servername, $username, $password, $database);

if($koneksi->connect_error){
    die("Koneksi Gagal" . $koneksi->connect_error);
}
// echo 'Koneksi Berhasil';

?>