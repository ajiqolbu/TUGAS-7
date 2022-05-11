<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check Connection
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}

$sql = "CREATE TABLE Buku_Tamu3 (
    id_bt INT(10) PRIMARY KEY,
    nama VARCHAR(40) NOT NULL,
    email VARCHAR(30) NOT NULL,
    isi text
    )";
    
if (mysqli_query($conn, $sql)) {
    echo "Berhasil Dibuat";
} else {
    echo "Gagal Membuat" . mysqli_error($conn);
}

mysqli_close($conn);
?>