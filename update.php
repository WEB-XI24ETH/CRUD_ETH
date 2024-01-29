<?php
require 'function.php' ;

$id = $_GET["id"];

$ubahDB = query("SELECT * FROM cafe WHERE id = $id")[0]; 

if ( isset($_POST["submit"])){

    if (update($_POST) > 0 ){
        echo "<script>
                alert('Data Berhasil diupdate');
                document.location.href = 'index.php';
              </script>";
    }else {
        echo "<script>
                alert('Data Tidak Berhasil diupdate');
                document.location.href = 'index.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Data Pelanggan</h1>
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $ubahDB["id"]; ?>">
    <ul>
        <li>
            <label for="Nama">Nama</label>
            <input type="text" name="Nama" id="Nama" required value="<?= $ubahDB["Nama"];?>">
        </li>
        <li>
            <label for="Pesanan">Pesanan</label>
            <input type="text" name="Pesanan" id="Pesanan" required value="<?= $ubahDB["Pesanan"];?>">
        </li>
        <li>
            <label for="Harga">Harga</label>
            <input type="text" name="Harga" id="Harga" required value="<?= $ubahDB["Harga"];?>">
        </li>
        <li>
            <label for="Jumlah">Jumlah</label>
            <input type="text" name="Jumlah" id="Jumlah" required value="<?= $ubahDB["Jumlah"];?>">
        </li>
        <li>
            <label for="Total">Total</label>
            <input type="text" name="Total" id="Total" required value="<?= $ubahDB["Total"];?>">
        </li>
        <li>
            <label for="Pembayaran">Pembayaran</label>
            <input type="text" name="Pembayaran" id="Pembayaran" required value="<?= $ubahDB["Pembayaran"];?>">
        </li>
        <li>
            <button type="submit" name="submit">Update Data</button>
        </li>
    </ul>
</form>
</body>
</html>