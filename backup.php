<?php
$conn = mysqli_connect("localhost", "root", "", "barber" );
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
        $harga      = $data["harga"];
        $keterangan    = $data["keterangan"];
    // query insert data
    $query = "INSERT INTO barber
                VALUES
                ('','$nama', '$model', '$harga', '$keterangan')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    }
?>