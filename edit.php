<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$nomor_telepon = $_POST['nomor_telepon'];
$alamat = $_POST['alamat'];

$data = mysqli_query($koneksi, "UPDATE mahasiswa SET nama = '$nama', umur = '$umur', jenis_kelamin = '$jenis_kelamin', nomor_telepon = '$nomor_telepon', alamat = '$alamat' WHERE id = '$id'");

header('location:index.php');

?>