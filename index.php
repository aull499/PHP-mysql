<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1 style="text-align: center; color: black; font-weight: 400;">Praktek HTML dan PHP</h1>

    <table border="1" style="width: 80%; text-align: center">
        <tr style="header-table">
            <th>
                <!-- Tautan untuk Data Laki-Laki -->
                <a href="datalakilaki.php">Data Laki-Laki</a>
            </th>
            <th colspan=>
                <!-- Tautan untuk Data Perempuan -->
                <a href="dataperempuan.php">Data Perempuan</a>
            </th>
            <th>
                <!-- Tautan untuk Tambah Data dengan ID peserta -->
                <a href="form.php">Tambah Data</a>
            </th>
        </tr>
    </table>

    <br> <!-- Menambahkan jarak antara kedua tabel -->

    <table border="1" style="width: 80%; text-align: center">
        <tr style="background-color: pink; color: black; font-weight: 500; font-family: Arial;">
            <th width="5%">No.</th>
            <th width="15%">Nama</th>
            <th width="10%">Umur</th>
            <th width="10%">Jenis Kelamin</th>
            <th width="15%">Nomor Telepon</th>
            <th width="20%">Alamat</th>
            <th width="25%">Option</th>
        </tr>
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
        while($peserta = mysqli_fetch_array($data)){
            ?>

            <tr>
                <td><?php echo $peserta['id']; ?></td>
                <td><?php echo $peserta['nama']; ?></td>
                <td><?php echo $peserta['umur']; ?></td>
                <td><?php echo $peserta['jenis_kelamin']; ?></td>
                <td><?php echo $peserta['nomor_telepon']; ?></td>
                <td><?php echo $peserta['alamat']; ?></td>
                <td>
                    <a href="formedit.php?id=<?php print $peserta['id'] ?>">Edit</a> | 
                    <a href="hapus.php?id=<?php echo $peserta['id'] ?>" onclick="return confirm('Yakin Mau Hapus?')">Delete</a> | 
                    <a href="detail.php?id=<?php echo $peserta['id'] ?>">Detail</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>

</html>