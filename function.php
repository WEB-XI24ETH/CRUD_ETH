<?php
    //koneksi database
    $conn = mysqli_connect("localhost", "root", "", "db_rifky");
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query) ;
        // menyediakan wadahnya
        $rows =[];
        // yg akan di ambil setiap data
        while ( $row = mysqli_fetch_assoc($result)) {
        // menambahkan elemen baru setiap array
            $rows[] = $row;
        }
        //mengembalikan data, rows bentuknya sudah array assosiatif
        return $rows;
    }
        function tambah ($data) {
            global $conn ;
        // ambil data dari tiap elemen dajumlah
            $nama           = htmlspecialchars($data["nama"]);
            $pesanan        = htmlspecialchars($data["pesanan"]);
            $harga          = htmlspecialchars($data["harga"]);
            $jumlah         = htmlspecialchars($data["jumlah"]);
            $total          = htmlspecialchars($data["total"]);
            $pembayaran     = htmlspecialchars($data["pembayaran"]);
        // query insert data
        $query = "INSERT INTO perpustakaan
                    VALUES
                    ('','$nama', '$pesanan', '$harga', '$jumlah', '$total', '$pembayaran')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

        function hapus($id){
            global $conn;
            mysqli_query($conn, "DELETE FROM perpustakaan WHERE id = $id");
            
            return mysqli_affected_rows($conn);
    }
        function update ($data) {
            global $conn ;

            $id             = $data["id"];
            $nama           = htmlspecialchars($data["nama"]);
            $pesanan        = htmlspecialchars($data["pesanan"]);
            $harga          = htmlspecialchars($data["harga"]);
            $jumlah         = htmlspecialchars($data["jumlah"]);
            $total          = htmlspecialchars($data["total"]);
            $pembayaran     = htmlspecialchars($data["pembayaran"]);
    // query insert data
        $query = "UPDATE perpustakaan SET
                    nama        = '$nama',
                    pesanan     = '$pesanan',
                    harga       = '$harga',
                    jumlah      = '$jumlah',
                    total       = '$total',
                    pembayaran  = '$pembayaran
                WHERE id        = $id
                ";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    function cari($keyword){
        $query = "SELECT * FROM perpustakaan WHERE nama LIKE '$keyword' OR penulis LIKE '$keyword'
                    ";
        return query($query);
    }
    ?>