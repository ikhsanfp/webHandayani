<?php
$servername = "localhost";
$username = "root";
$password = ""; // sesuaikan dengan password MySQL Anda
$dbname = "login"; // ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil";

// Menutup koneksi
$conn->close();
?>
