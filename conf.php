<?php
$koneksi = mysqli_connect('localhost','root','','login');

// Memeriksa apakah koneksi berhasil
if (!$koneksi) {
    die("Koneksi gagal: ". mysqli_connect_error);
}
else{
    echo "Koneksi berhasil!";
}
?>
