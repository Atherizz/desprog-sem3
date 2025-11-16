<?php
include 'koneksi.php';

$sql = "INSERT INTO user (username, password)
        VALUES ('admin', MD5('123'))";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dimasukkan ke tabel user!";
} else {
    echo "Gagal memasukkan data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
