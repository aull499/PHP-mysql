<?php

include 'koneksi.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Jalankan query untuk mengambil data
    $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = '$id'");

    // Periksa apakah ada data yang ditemukan
    if (mysqli_num_rows($data) > 0) {
        while ($peserta = mysqli_fetch_array($data)){
            ?>

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Form</title>
            </head>
            <body>
                <h1>Form Mahasiswa</h1>
                <form action="edit.php" method="post">

                <input type="hidden" name="id" value="<?php print $peserta['id'] ?>">

                <form action="create.php" method="post">

                    
                    <label>Nama</label>
                    <br>
                    <input type="text" name="nama" value="<?php print $peserta['nama']?>">

                    <br>

                    <label>Umur</label>
                    <br>
                    <input type="number" name="umur" value="<?php print $peserta['umur']?>">

                    <br>

                    <label>Jenis Kelamin</label>
                    <br>
                    <input type="text" name="jenis_kelamin" value="<?php print $peserta['jenis_kelamin']?>">

                    <br>

                    <label>Nomor Telepon</label>
                    <br>
                    <input type="number" name="nomor_telepon" value="<?php print $peserta['nomor_telepon']?>">

                    <br>

                    <label>Alamat</label>
                    <br>
                    <textarea name="alamat"><?php print $peserta['alamat']?></textarea>

                    <br>

                    <button type="submit">Save</button>

                </form>
                </form>
            </body>
            </html>

            <?php
        }
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak ditemukan.";
}

?>
