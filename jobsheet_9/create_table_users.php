<?php
include 'koneksi.php';

$sql = "CREATE TABLE user (
    id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel 'user' berhasil dibuat!";
} else {
    echo "Gagal membuat tabel: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
