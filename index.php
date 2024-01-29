<?php
require 'function.php';

if (isset($_POST['cari'])){
    $cafe = cari($_POST["keyword"]);
} else {
    $cafe = query("SELECT * FROM cafe");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Pembeli</h1>
    <a href="tambah.php">Tambah Pelanggan</a><br><br>
    <form action="" method="post">
        <input type="text" name="keyword" autofocus placeholder="Tulis pencarianmu disini.." autocomplete="off" size="20">
        <button type="submit" name="cari">Cari</button><br><br>
    </form>
<table border="1" cellpadding="10" cellspacing = "0">
<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Nama</th>
    <th>Pesanan</th>
    <th>Harga</th>
    <th>Jumlah</th>
    <th>Total</th>
    <th>Pembayaran</th>
</tr>
    <?php $i = 1; ?>
    <?php 
        foreach ($cafe as $row) :?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="update.php?id=<?= $row["id"]; ?>">update </a>
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick=" return confirm('Apakah anda yakin ingin menghapus data ini?')">delete</a>
        </td>
        <td><?= $row["Nama"]; ?></td>
        <td><?= $row["Pesanan"]; ?></td>
        <td><?= $row["Harga"]; ?></td>
        <td><?= $row["Jumlah"]; ?></td>
        <td><?= $row["Total"]; ?></td>
        <td><?= $row["Pembayaran"]; ?></td>
    </tr>  
    <?php $i++?>  
    <?php endforeach;?>
</table>
</body>
</html>