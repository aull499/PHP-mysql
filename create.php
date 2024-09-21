<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nomor_telepon = $_POST['nomor_telepon'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "INSERT INTO mahasiswa (nama, umur, jenis_kelamin, nomor_telepon, alamat) VALUES('$nama', '$umur', '$jenis_kelamin', '$nomor_telepon', '$alamat')");

header("location:index.php")


?>