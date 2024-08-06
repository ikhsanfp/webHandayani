<?php
include('conf.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    $query = "SELECT * FROM id WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        // Login success
        header('Location: app/index.html');
        exit();
    } else {
        // Login failed
        header('Location: index.php?error=1');
        exit();
    }
} else {
    // Username or password not set
    header('Location: index.php?error=2');
    exit();
}
?>