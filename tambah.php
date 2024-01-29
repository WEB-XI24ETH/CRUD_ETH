<?php
require 'function.php' ;

if ( isset($_POST["submit"])){

    if (tambah($_POST) > 0 ){
        echo "<script>
                alert('Data Berhasil');
                document.location.href = 'index.php';
              </script>";
    }else {
        echo "<script>
                alert('Data Tidak Berhasil');
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
    <h1>Tambah Data Pelanggan</h1>
<form action="" method="post">
    <ul>
        <li>
            <label for="Nama">Nama</label>
            <input type="text" name="Nama" id="Nama" require>
        </li>
        <li>
            <label for="Pesanan">Pesanan</label>
            <input type="text" name="Pesanan" id="Pesanan" require>
        </li>
        <li>
            <label for="Harga">Harga</label>
            <input type="text" name="Harga" id="Harga" require>
        </li>
        <li>
            <label for="Jumlah">Jumlah</label>
            <input type="text" name="Jumlah" id="Jumlah" require>
        </li>
        <li>
            <label for="Total">Total</label>
            <input type="text" name="Total" id="Total" require>
        </li>
        <li>
            <label for="Pembayaran">Pembayaran</label>
            <input type="text" name="Pembayaran" id="Pembayaran" require>
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data</button>
        </li>
    </ul>
</form>
</body>
</html>