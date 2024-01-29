<?php
require 'function.php';
$conn = mysqli_connect("localhost", "root", "", "belajardata");
$barber = mysqli_query($conn, "SELECT * FROM barber");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Barbershop</h1>
    <a href="tambah.php">Tambah Pelanggan</a><br><br>\
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>Nama</th>
        <th>Model</th>
        <th>Harga</th>
        <th>keterangan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($barber as $row) :
         ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">update</a>
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus?')">delete</a>
            </td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["model"]; ?></td>
            <td><?= $row["harga"]; ?></td>
            <td><?= $row["keterangan"]; ?></td>
        </tr>
        <?php $i++?>
        <?php endforeach; ?>
</table>
</body>
</html>