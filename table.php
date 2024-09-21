<?php

include 'koneksi.php';

$create = "CREATE TABLE mahasiswa (
id INT AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(200) NOT NULL,
umur INT(10) NOT NULL,
jenis_kelamin VARCHAR(5) NOT NULL,
nomor_telepon INT(15) NOT NULL,
alamat VARCHAR(200) NOT NULL
)";

if ($koneksi->query($create) === true){
    echo "Tabel Berhasil";
}else{
    echo "Gagal Membuat Table";
}

$koneksi->close();

?>