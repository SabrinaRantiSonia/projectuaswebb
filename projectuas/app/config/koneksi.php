<?php
$servername = "localhost";
$database = "listrik_db";
$username = "root";
$password = '';
 
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database) or die($conn);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error($conn));
}
mysqli_close($conn);
?>