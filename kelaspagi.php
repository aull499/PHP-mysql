<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Bootcamp</title>
</head>
<body>
    <h1 style="text-align: center; color: black; font-weight: 400;">Detail Bootcamp</h1>

    <br> <!-- Menambahkan jarak antara kedua tabel -->

    <table border="1" style="width: 80%; text-align: center">
        <tr style="background-color: pink; color: black; font-weight: 500; font-family: Arial;">
            <th width="5%">No.</th>
            <th width="15%">Nomor Bootcamp</th>
            <th width="10%">Nama Peserta</th>
            <th width="10%">Nama Bootcamp</th>
            <th width="15%">Jadwal Kelas</th>
            <th width="20%">No Telp</th>
        </tr>
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM detail WHERE jadwal_kelas LIKE 'Pagi'");
        while($detail = mysqli_fetch_array($data)){
            ?>

            <tr>
                <td><?php echo $detail['id']; ?></td>
                <td><?php echo $detail['nomor_bootcamp']; ?></td>
                <td><?php echo $detail['nama_peserta']; ?></td>
                <td><?php echo $detail['nama_bootcamp']; ?></td>
                <td><?php echo $detail['jadwal_kelas']; ?></td>
                <td><?php echo $detail['no_telp']; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>

</html> 