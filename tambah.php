<?php
require 'function.php';

 if ( isset($_POST["submit"])) {

    if (tambah($_POST)> 0 ){

        echo "<script>
                alert ('Data Berhasil');
                document.location.href = 'index.php';
                </script>";
        } else {
        echo "<script>
                alert ('Data Tidak Berhasil');
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
    <h1>tambah data pelanggan</h1>
<form action="" method="post">
    <ul>
        <li>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">
        </li>
        <li>
            <label for="model">Model</label>
            <input type="text" name="model" id="harga">
        </li>
        <li>
            <label for="harga">harga</label>
            <input type="text" name="harga" id="harga">
        </li>
        <li>
            <label for="keterangan">Keterangan</label>
            <input type="text" name="keterangan" id="keterangan">
        </li>
        <li>
        <button type="submit" name="submit">tambah data</button>
        </li>
    </ul>
</form>
</body>
</html>

