<?php
$conn = mysqli_connect("localhost", "root", "", "belajardata");
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query) ;

    $rows =[];

    while ( $row = mysqli_fetch_assoc($result)) {

        $rows[] = $row;
    }
    return $rows;
}
    function tambah ($data) {
        global $conn ;
        $nama        = $data["nama"];
        $model       = $data["model"];
        $harga       = $data["harga"];
        $keterangan  = $data["keterangan"];
    // query insert data
    $query = "INSERT INTO barber
                VALUES
                ('','$nama', '$model', '$harga', '$keterangan')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    }

    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM barber WHERE id = $id");

        return mysqli_affected_rows($conn);
    }
?>
