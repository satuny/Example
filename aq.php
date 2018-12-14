<?php
$servername = "localhost";
$username   = "phpmyadmin";
$password   = "123";
$dbname     = "latihan";
// Create connection // membuat koneksi
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check connection // memeriksa koneksi // alter untuk menggubah databes (berlawanan dengan create (untuk membuat databes))
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE kegiatan (
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
kegiatan harian VARCHAR(100) NOT NULL,
kemalasanq VARCHAR(100) NOT NULL, 
waktu kegiatan VARCHAR(100) NOT NULL,
)";
mysqli_query($connect, $sql)  
// if (mysqli_connect_error()) {
//     die("Database connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>
